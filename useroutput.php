<?php
require 'configDB.php';
$query = $pdo->query('SELECT * FROM users ');
while ($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<div id="list-item"><b>' . $row->name . " - " . $row->email . '</b><button onclick=processButton(' . $row->id . ') type="button" name="deleteButton" id="delete">Delete</button></div>';
}
echo '</ul>';
