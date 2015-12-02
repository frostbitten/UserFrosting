<?php



    // Register common2 CSS files
    $app->schema->registerCSS("common2", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css");
    $app->schema->registerCSS("common2", "font-starcraft.css");
    $app->schema->registerCSS("common2", "../bs4-plugin/bootstrap/dist/css/bootstrap.min.css");
    $app->schema->registerCSS("common2", "../bs4-plugin/drop-master/dist/css/drop-theme-basic.min.css");
    $app->schema->registerCSS("common2", "../bs4-plugin/drop-master/dist/css/drop-theme-hubspot-popovers.min.css");
    $app->schema->registerCSS("common2", "../bs4-plugin/drop-master/dist/css/drop-theme-arrows.min.css");
    $app->schema->registerCSS("common2", "../bs4-plugin/drop-master/dist/css/drop-theme-arrows-bounce.min.css");
    $app->schema->registerCSS("common2", "../bs4-plugin/drop-master/dist/css/drop-theme-arrows-bounce-dark.min.css");
    $app->schema->registerCSS("common2", "../bs4-plugin/drop-master/dist/css/drop-theme-arrows-bounce-inverse.css");
    $app->schema->registerCSS("common2", "https://cdnjs.cloudflare.com/ajax/libs/fuelux/3.12.0/css/fuelux.min.css");
    $app->schema->registerCSS("common2", "bootstrap-switch.css");
    $app->schema->registerCSS("common2", "tablesorter/theme.bootstrap.css");
    $app->schema->registerCSS("common2", "tablesorter/jquery.tablesorter.pager.css");
    //$app->schema->registerCSS("common2", "select2/select2.css");
    //$app->schema->registerCSS("common2", "select2/select2-bootstrap.css");
    //$app->schema->registerCSS("common2", "bootstrap-custom.css");
    $app->schema->registerCSS("common2", "../bs4-plugin/css/bs3-carryover.css");
    //$app->schema->registerCSS("common2", "bootstrapradio.css");
    $app->schema->registerCSS("common2", "https://cdnjs.cloudflare.com/ajax/libs/tether/1.1.1/css/tether.min.css");
	
    

    $app->schema->registerCSS("dashboard2", "../bs4-plugin/css/timeline2.css");
	
    // Dashboard CSS
    $app->schema->registerCSS("dashboard2", "../bs4-plugin/css/timeline.css");
    $app->schema->registerCSS("dashboard2", "/lib/morris.css");
    $app->schema->registerCSS("dashboard2", "http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css");    
    
    
    // Register common JS files
    $app->schema->registerJS("common2", "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js");
    $app->schema->registerJS("common2", "../bs4-plugin/js/tether.js");
    $app->schema->registerJS("common2", "../bs4-plugin/drop-master/dist/js/drop.js");
    $app->schema->registerJS("common2", "../bs4-plugin/bootstrap/dist/js/bootstrap.js");
    $app->schema->registerJS("common2", "https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.min.js");
    $app->schema->registerJS("common2", "https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.6.0/jquery.matchHeight-min.js");
    //$app->schema->registerJS("common2", "https://cdnjs.cloudflare.com/ajax/libs/fuelux/3.12.0/js/fuelux.min.js");
    $app->schema->registerJS("common2", "jqueryValidation/jquery.validate.js");
    $app->schema->registerJS("common2", "jqueryValidation/additional-methods.js");
    $app->schema->registerJS("common2", "jqueryValidation/jqueryvalidation-methods-fortress.js");    
    $app->schema->registerJS("common2", "moment.js");
    $app->schema->registerJS("common2", "tablesorter/jquery.tablesorter.js");
    $app->schema->registerJS("common2", "tablesorter/tables.js");
    $app->schema->registerJS("common2", "tablesorter/jquery.tablesorter.pager.js");
    $app->schema->registerJS("common2", "tablesorter/jquery.tablesorter.widgets.js");
    $app->schema->registerJS("common2", "tablesorter/widgets/widget-sort2Hash.js");
    //$app->schema->registerJS("common2", "select2/select2.min.js");
    $app->schema->registerJS("common2", "bootstrap-switch.js");
    $app->schema->registerJS("common2", "handlebars-v1.2.0.js");    
    $app->schema->registerJS("common2", "../bs4-plugin/js/userfrosting.js");
    //$app->schema->registerJS("common2", "../js2/uf2.js");
	
	
    // Dashboard JS
    $app->schema->registerJS("dashboard2", "lib/raphael.js");
    $app->schema->registerJS("dashboard2", "lib/morris.js");
    
    // Users JS
    $app->schema->registerJS("user2", "../bs4-plugin/js/widget-users.js");
    $app->schema->registerJS("user2", "../bs4-plugin/js/widget-users2.js");
    
    // Groups JS
    $app->schema->registerJS("group2", "../bs4-plugin/js/widget-groups.js");

	
	
?>