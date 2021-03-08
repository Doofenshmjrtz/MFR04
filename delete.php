<?php
require 'configDB.php';

$id = $_POST['id'];

$sql = 'DELETE FROM users WHERE id = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);
