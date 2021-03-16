$(document).ready(function() {
    $("#usersbtn").click(function(){
        $("#users").load("useroutput.php", {
        });
    });
});