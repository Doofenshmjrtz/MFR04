$(document).ready(function(){
    var checkreport = false;
    $("#submit").click(function() {
        checkreport = true;
        let data = document.getElementsByClassName("inputdata");
        $("#report").load("add.php",{
            fname: data[0].value,
            lname: data[1].value,
            email: data[2].value,
            check: checkreport
        });
    });
});
