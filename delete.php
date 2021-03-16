<?php
require 'configDB.php';

$id = $_POST['id'];

$sql = 'DELETE FROM users WHERE id = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

?>
<script>
    $(document).ready(function() {
        $("#users").load("useroutput.php", {});
    });
</script>