<?php
require 'configDB.php';
$newUserCount = $_POST['newUserCount'];
if ($newUserCount == true) {
    $query = $pdo->query('SELECT * FROM users ');
    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<div id="list-item"><b>' . $row->name . " - " . $row->email . '</b><a href="/delete.php?id=' . $row->id . '"><button type="button" name="" id="delete">Delete</button></a></div>';
    }
    echo '</ul>';
}
