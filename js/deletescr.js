$(document).ready(function(){
    $("#delete").click(function() {
        let id=document.getElementsByName();
        console.log(id);
        $.ajax({
            type: "POST",
            url: "delete.php",
            data: id,
            dataType: "json"
        });
    });
});