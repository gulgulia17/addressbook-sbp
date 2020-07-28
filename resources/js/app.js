import 'datatables.net-bs4'
import 'datatables.net-buttons-bs4'

$(function () {
    $(".custom-file-input").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $('#table').DataTable();
});