$(document).ready(function(){
    $("#delete").click(function() {
        $.ajax({
            type: "POST",
            url: "delete.php",
            dataType: "json"
        });
    });
});