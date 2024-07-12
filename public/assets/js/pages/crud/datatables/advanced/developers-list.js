"use strict";
var KTDatatablesAdvancedColumnRendering = function() {

	var init = function() {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			responsive: true,
			paging: true,
			columnDefs: [
				
				{
					targets: 2,
					/*render: function(data, type, full, meta) {
						return '<a class="text-dark-50 text-hover-primary" href="mailto:' + data + '">' + data + '</a>';
					},*/
				},
				{
					targets: -1,
					title: 'Actions',
					orderable: false,
					/*render: function(data, type, full, meta) {
						return '\
							<a href="javascript:;" data-toggle="modal" data-target="#activitypopup" class="btn btn-sm btn-clean btn-icon" title="Activity">\
								<i class="la la-clipboard-list"></i>\
							</a>\
							<a href="javascript:;" data-toggle="modal" data-target="#editcontactpopup" class="btn btn-sm btn-clean btn-icon" title="Edit details">\
								<i class="la la-edit"></i>\
							</a>\
							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
								<i class="la la-trash"></i>\
							</a>\
						';
					},*/
				},
			],
		});

		$('#kt_datatable_search_status').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Status');
		});

		$('#kt_datatable_search_type').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Type');
		});

		$('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
	};

	return {

		//main function to initiate the module
		init: function() {
			init();
		}
	};
}();

jQuery(document).ready(function() {
	KTDatatablesAdvancedColumnRendering.init();
});
