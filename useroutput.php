<?php
require 'configDB.php';
$newUserCount = $_POST['newUserCount'];
if ($newUserCount == true) {
    echo '<ul>';
    $query = $pdo->query('SELECT * FROM users ');
    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>' . $row->name . " - " . $row->email . '</b><form method="POST"><button type="button" class="dltbutton" id="delete">Delete</button></form></li>';
    }
    echo '</ul>';
}
