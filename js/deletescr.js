$(document).ready(function(){
    $("#delete").click(function() {
        let id=document.getElementsByName();
        $.ajax({
            type: "POST",
            url: "delete.php",
            data: id,
            dataType: "json"
        });
    });
});