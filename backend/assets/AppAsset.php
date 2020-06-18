<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        '//fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons',
        '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        // 'font-awesome/css/all.css',
        'css/material-dashboard.css',
    ];
    public $js = [
        // 'js/core/jquery.min.js',
        'js/core/popper.min.js',
        'js/core/bootstrap-material-design.min.js',
        'js/plugins/perfect-scrollbar.jquery.min.js', // Core JS Files
        'js/plugins/moment.min.js', // Plugin for the momentJs
        'js/plugins/sweetalert2.js', // Plugin for Sweet Alert
        'js/plugins/jquery.validate.min.js', // Forms Validations Plugin
        'js/plugins/jquery.bootstrap-wizard.js', // Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard
        'js/plugins/bootstrap-selectpicker.js', // Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select
        'js/plugins/bootstrap-datetimepicker.min.js', // Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/
        'js/plugins/jquery.dataTables.min.js', // DataTables.net Plugin, full documentation here: https://datatables.net/
        'js/plugins/bootstrap-tagsinput.js', // Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs
        'js/plugins/jasny-bootstrap.min.js', // Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput
        'js/plugins/fullcalendar.min.js', // Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar
        'js/plugins/jquery-jvectormap.js', // Vector Map plugin, full documentation here: http://jvectormap.com/documentation/
        'js/plugins/nouislider.min.js', // Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/
        '//cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js', // Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert
        'js/plugins/arrive.min.js', // Library for adding dinamically elements
        'js/plugins/chartist.min.js', // Chartist JS
        'js/plugins/bootstrap-notify.js', // Notifications Plugin
        // 'font-awesome/js/all.js', // Font-Awesome JS
        'js/material-dashboard.js?v=2.1.2', // Control Center for Material Dashboard: parallax effects, scripts for the example pages etc
        'js/plugin.custom.js', // Plugin for changing color and image of sidebar
        'js/custom.js', // Custom Javascript for dev purposes
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
