$(document).ready(function(){
    var checkreport = false;
    $("#submit").click(function() {
        checkreport = true;
        let submitData = document.getElementsByClassName("inputdata");
        $("#report").load("add.php",{
            fname: submitData[0].value,
            lname: submitData[1].value,
            email: submitData[2].value,
            check: checkreport
        });
    });
});
