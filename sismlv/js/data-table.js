$(document).ready(function() {
	$(".table").DataTable({
		"scrollX": true,
		"autoWidth": false,
		"columnDefs": [
			{
				"className": "dt-center",
				"targets": "_all"
			}
      	],
		"language": {
            "url": "js/data-table-idioma.js"
         },
	});
});