$(function () {
    $("#datepicker").datepicker();
});
$("#save-btn-past-experience").on("click", () => {
    const company = $("#company").val();
    const title = $("#past-title").val();
    $("#past-experience").append("<h6><b>Company</b>: "+company+" | <b>Title:</b> "+title+"</h6>");
    $('#myModal').modal('hide')
});