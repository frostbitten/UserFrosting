
/**
 * Display a modal form for updating/creating a user.
 */
function userForm(box_id, user_id) {	
	user_id = typeof user_id !== 'undefined' ? user_id : "";
	
	// Delete any existing instance of the form with the same name
	if($('#' + box_id).length ) {
		$('#' + box_id).remove();
	}
	
    var data = {
		box_id: box_id,
		render: 'modal'
	};
    
    var url = site['uri']['public'] + "/forms/users";  
    
    // If we are updating an existing user
    if (user_id) {
        data = {
            box_id: box_id,
            render: 'modal',
            mode: "update"
        };
        
        url = site['uri']['public'] + "/forms/users/u/" + user_id;
    }
    
	// Fetch and render the form
	$.ajax({  
	  type: "GET",  
	  url: url,
	  data: data,
	  cache: false
	})
	.fail(function(result) {
        // Display errors on failure
        $('#userfrosting-alerts').flashAlerts().done(function() {
        });
	})
	.done(function(result) {
		// Append the form as a modal dialog to the body
		$( "body" ).append(result);
		$('#' + box_id).modal('show');
		
        // Initialize select2's
       // $('#' + box_id + ' .select2').select2();
        
		// Initialize bootstrap switches
		var switches = $('#' + box_id + ' .bootstrapswitch');
		switches.data('on-label', '<i class="fa fa-check"></i>');
		switches.data('off-label', '<i class="fa fa-times"></i>');
		switches.bootstrapSwitch();
		//switches.bootstrapSwitch('setSizeClass', 'switch-mini' );
		
		//$("input.bootstrapswitch").bootstrapSwitch();
		
		// Initialize primary group buttons
		//$(".bootstrapradio").bootstrapradio();
		
		// Enable/disable primary group buttons when switch is toggled
		switches.on('switch-change', function(event, data){
			var el = data.el;
			var id = el.data('id');
			// Get corresponding primary button
			var primary_button = $('#' + box_id + ' input.bootstrapradio[name="primary_group_id"][value="' + id + '"]');
			// If switch is turned on, enable the corresponding button, otherwise turn off and disable it
			console.log(id);
			if (data.value) {
				primary_button.parent().removeClass('disabled');
			} else {
				primary_button.prop('checked', false);
				primary_button.parent().addClass('disabled');
				primary_button.parent().removeClass('active');
			}	
		});
		 
		// Link submission buttons
        ufFormSubmit(
            $('#' + box_id).find("form"),
            validators,
            $("#form-alerts"),
            function(data, statusText, jqXHR) {
                // Reload the page on success
                window.location.reload(true);   
            }
        );	
	});
}
