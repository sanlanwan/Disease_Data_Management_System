$(document).ready(function () {
// Function to change form action.
    $("#discat").change(function () {
        var selected = $(this).children(":selected").text();
        switch (selected) {
            case "Deficiency":
                $("#myform").attr('action');
                alert("On submit fill the necessary fields related to the disease.");
                break;
            case "Heredity":
                $("#myform").attr('action');
                alert("On submit fill the necessary fields related to the disease.");
                break;
            case "Pathology":
                $("#myform").attr('action');
                alert("On submit fill the necessary fields related to the disease.");
                break;
            case "Physiology":
                $("#myform").attr('action');
                alert("On submit fill the necessary fields related to the disease.");
                break;
            default:
                $("#myform").attr('action');
        }
    });
// Function For Back Button
    $(".back").click(function () {
        parent.history.back();
        return false;
    });
});