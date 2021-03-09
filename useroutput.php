<?php
require 'configDB.php';
$newUserCount = $_POST['newUserCount'];
if ($newUserCount == true) {
    $query = $pdo->query('SELECT * FROM users ');
    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<div id="list-item"><b>' . $row->name . " - " . $row->email . '</b><button type="button" name="' . $row->id . '" id="delete">Delete</button></></div>';
    }
    echo '</ul>';
}
