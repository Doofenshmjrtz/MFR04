$(document).ready(function(){
    $("#submit").click(function() {
        let data = document.getElementsByClassName("inputdata");
        $("#report").load("add.php",{
            fname: data[0].value,
            lname: data[1].value,
            email: data[2].value
        });
    });
});
