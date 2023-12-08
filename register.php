<!DOCTYPE html>
<html>
    <head>
        <title>Create User Account</title>
    </head>
    <body>
        <?php require_once("inc/header.php"); ?>
        <h1>Account Information</h1>
        <form method="GET" action="register.get.php">
        <p>
            ID : 
            <input type="text" name="login_id" />
        <p>
        <p>
            PW : 
            <input type="password" name="login_pw" />
        <p>            
        <p>
            NAME : 
            <input type="text" name="login_name" />
        <p>
        <p><input type="submit" value="Create"></p>
        </form>
    </body>
</html>
