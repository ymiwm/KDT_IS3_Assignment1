<?php
require_once("inc/db.php");

$login_id = isset($_GET['login_id']) ? $_GET['login_id'] : null;
$login_pw = isset($_GET['login_pw']) ? $_GET['login_pw'] : null;

if ($login_id == null || $login_pw == null){
    ?>
    <script>
        alert("ID or PW is blank. Please try again.");
        location.replace('login.php');
    </script>
    <?php
    exit();
}

$member_data = db_select("select * from tbl_member where login_id = ?", array($login_id));

if ($member_data == null || count($member_data) == 0){
    ?>
    <script>
        alert("There is no member id name (<?php echo $login_id?>). Please try again.");
        location.replace('login.php');
    </script>
    <?php
    exit();
}

$is_match_password = password_verify($login_pw, $member_data[0]['login_pw']);

if ($is_match_password === false){
    ?>
    <script>
        alert("There is wrong password. Please try again.");
        location.replace('login.php');
    </script>
    <?php
    exit();
}

session_start();

$_SESSION['member_id'] = $member_data[0]['member_id'];
$_SESSION['member_name'] = $member_data[0]['login_name'];

echo "<script>
    alert('Logged-In. Go to main...');
    location.href='/index.php'
	</script>";
?>