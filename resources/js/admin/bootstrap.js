window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js').default;
require('./material-dashboard/bootstrap-material-design.min');

window.locale = document.documentElement.lang;
window.$html = $('html');
window.$body = $('body');
window.csrf_token = $('meta[name=csrf-token]').attr('content');

require('datatables.net');
require('datatables.net-bs4');

/* TinyMCE WYSIWYG */
require('tinymce');

/* Plugin for the Perfect Scrollbar */
require('./material-dashboard/plugins/perfect-scrollbar.jquery.min');

/* Plugin for the momentJs */
window.moment = require('moment');

/*  Plugin for Sweet Alert */
window.Swal = require('sweetalert2');

/* Forms Validations Plugin */
require('jquery-validation');
require('jquery-validation/dist/localization/messages_' + locale + '.js');

require('select2');
require('select2/dist/js/i18n/' + locale + '.js');

/* Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ */
// require("/js/admin/plugins/bootstrap-datetimepicker.min.js");

/* Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs */
// require("/admin/js/plugins/bootstrap-tagsinput.js");

/* Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar */
// require("/admin/js/plugins/fullcalendar.min.js");

/* Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ */
// require("/admin/js/plugins/jquery-jvectormap.js");

/* Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ */
// require("/admin/js/plugins/nouislider.min.js" );

/* Chartist JS */
// require("/admin/js/plugins/chartist.min.js");

/* Notifications Plugin */
// require("/admin/js/plugins/bootstrap-notify.js");

/* Control Center for Material Dashboard: parallax effects, scripts for the example pages etc */
// require('./material-dashboard/material-dashboard.min');
