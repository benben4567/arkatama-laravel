// Call the dataTables jQuery plugin
$(document).ready(function () {
    $('#dataTable').DataTable({
        "columnDefs": [
            { "className": "dt-center", "targets": "_all" }
        ]
    });
});
