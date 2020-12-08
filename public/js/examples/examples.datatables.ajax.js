/*
Name: 			Tables / Ajax - Examples
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version: 	3.0.0
*/

(function ($) {
	"use strict";

	var datatableInit = function () {
		var $table = $("#datatable-ajax");
		$table.dataTable({
			dom: '<"row"<"col-lg-6"l><"col-lg-6"f>><"table-responsive"t>p',
			bProcessing: true,
			sAjaxSource: $table.data("/reportsData"),
		});

		console.log($table);
	};

	$(function () {
		datatableInit();
	});
}.apply(this, [jQuery]));