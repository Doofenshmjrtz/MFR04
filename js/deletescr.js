$(document).ready(function(){
    $("#delete").click(function(event) {
        console.log($(this));
        let id=document.getElementsByName();
        $.ajax({
            type: "POST",
            url: "delete.php",
            data: id,
            dataType: "json"
        });
    });
});