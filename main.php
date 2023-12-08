<!DOCTYPE html>
<html>
    <head>
        <title>PHP Login Succeed</title>
    </head>
    <body>
        <?php require_once("inc/header.php"); ?>
        <h1>Sign In Succeed!</h1>
        <h2>Hello, <?php echo $_SESSION['member_name']?>!</h2>
    </body>
</html>