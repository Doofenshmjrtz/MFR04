$(document).ready(function(){
    $("#submit").click(function() {
        let submitData = document.getElementsByClassName("inputdata");
        let formData = {
            fname: submitData[0].value,
            lname: submitData[1].value,
            email: submitData[2].value
        }
        $.ajax({
            type: "POST",
            url: "add.php",
            data: formData,
            dataType: "json"
        });
    });
});