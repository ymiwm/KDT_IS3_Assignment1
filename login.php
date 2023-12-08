<!DOCTYPE html>
<html>
    <head>
        <title>PHP Sample Login</title>
    </head>
    <body>
        <?php require_once("inc/header.php"); ?>
        <h1>=== Sign In ===</h1>
        <form method="GET" action="login.get.php">
            <p>
                ID : 
                <input type="text" name="login_id" />
            </p>
            <p>
                PW : 
                <input type="password" name="login_pw" />
            </p>               
            <p>
                <input type="submit" value="Submit">
            </p>
        </form>
    </body>
</html>