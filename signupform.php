<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Signup Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="js/submitscr.js" type="text/javascript"></script>
    <script src="js/outputscr.js" type="text/javascript"></script>
    <script src="js/deletescr.js" type="text/javascript"></script>
</head>

<body>
    <form>
        <div class="container">
            <h1>Info vacuuminator</h1>
            <hr>
            <label for="fname"><b>First name</b></label>
            <input type="text" placeholder="Enter first name" name="fname" class="inputdata">
            <br>
            <label for="lname"><b>Last name</b></label>
            <input type="text" placeholder="Enter last name" name="lname" class="inputdata">
            <br>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" class="inputdata">
            <br>
            <button type="button" class="submitbtn" id="submit">Submit</button>
            <button type="button" id="usersbtn">Show users</button>
            <div id="report"></div>
        </div>
    </form>
    <div id="users"><?php require 'useroutput.php' ?></div>
</body>

</html>