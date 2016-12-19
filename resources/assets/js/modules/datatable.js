    window.dtable = $('.dataTable').DataTable( {
      data: window.data,
       language: {
          processing : '<img src=' + window.base_url + 'spin.gif>'
          },
      order: [[ 0, 'desc' ]],
      processing: true,
      paging: false,
	  scrollY: 380,
      columnDefs: [ {
        targets: [ 0 ],
        data: 'action',
        render: function ( data, type, full ) {
          return rowTemplate(full);
        }
      }
       ],
      columns: [
          { data: 'action' },
      ],
      search: false,
      dom: 't',
      "language": {
        "zeroRecords": "<span class='zero-msg'><b>لم يتم العثور على أية نتائج</b><div class='custom-zero-msg'></div></span>"
      }
    });

function rowTemplate(data) {
	var template = $(row_template).clone();
	template.find(".country").text(data.country);
	template.find(".name_eng").text(data.name_eng);
	template.find(".number").text(data.number);
	template.find(".name").text(data.name);

	return template.prop('outerHTML');
}