$(document).ready(function () {
	$('#tablaAlmacenes').DataTable({
		"scrollX": true,
		"columnDefs": [
			{
				"className": "dt-center",
				"targets": "_all"
			}
      ],
	});
});
