$(document).ready(function () {
	$('#tablaLista').DataTable({
		"scrollX": true,
		"columnDefs": [
			{
				"className": "dt-center",
				"targets": "_all"
			}
      ],
	});
});
