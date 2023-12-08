<?php
if(!session_id()){
    session_start();
}
if (isset($_SESSION['member_id'])){
    header("Location: /main.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Login Sample</title>
    </head>
    <body>
        <?php require_once("inc/header.php"); ?>
        <h1>PHP Login Sample</h1>
    </body>
</html>