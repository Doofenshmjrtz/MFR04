let currentId = document.getElementsByName("deletebtn");
    currentId.forEach(function(element) {
        element.addEventListener("click", currentId(input));
    });
    function currentId(number) {
        console.log(number);
    }
/*$(document).ready(function(){
    $("#delete").click(function(event) {
        event.preventDefault();
        let id=document.getElementsByName();
        $.ajax({
            type: "GET",
            url: "delete.php",
            data: id,
            dataType: "json"
        });
    });
});*/