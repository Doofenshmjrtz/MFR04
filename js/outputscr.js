$(document).ready(function() {
    var userCount = false;
    $("#usersbtn").click(function(){
        userCount = true;
        $("#users").load("useroutput.php", {
            newUserCount: userCount
        });
    });
});