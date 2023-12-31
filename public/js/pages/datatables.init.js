/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************************!*\
  !*** ./resources/js/pages/datatables.init.js ***!
  \***********************************************/
/*
Template Name: Qovex - Responsive Bootstrap 4 Admin Dashboard
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Datatables
*/

$(document).ready(function () {
  $('#datatable').DataTable();
  $('.datatable-rmodz').DataTable();

  //Buttons examples
  var table = $('#datatable-buttons').DataTable({
    lengthChange: false,
    buttons: ['copy', 'excel', 'pdf', 'colvis']
  });
  table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
});
/******/ })()
;