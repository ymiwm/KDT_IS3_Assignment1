<?php
require_once("inc/db.php");

$login_id = isset($_GET['login_id']) ? $_GET['login_id'] : null;
$login_pw = isset($_GET['login_pw']) ? $_GET['login_pw'] : null;
$login_name = isset($_GET['login_name']) ? $_GET['login_name'] : null;

if ($login_id == null || $login_pw == null || $login_name == null){    
    ?>
    <script>
        alert("Not enough information. Please try again.");
        location.replace('register.php');
    </script>
    <?php
    exit();
}

$member_count = db_select("select count(member_id) cnt from tbl_member where login_id = ?" , array($login_id));

if ($member_count && $member_count[0]['cnt'] == 1){    
    ?>
    <script>
        alert("Account already exists. Please try again.");
        location.replace('register.php');
    </script>
    <?php
    exit();
}

$bcrypt_pw = password_hash($login_pw, PASSWORD_BCRYPT);

db_insert("insert into tbl_member (login_id, login_name, login_pw) values (:login_id, :login_name, :login_pw )",
    array(
        'login_id' => $login_id,
        'login_name' => $login_name,
        'login_pw' => $bcrypt_pw
    )
);

echo "<script>
    alert('Account created successfully. Go to login...');
    location.href='/login.php'
	</script>";
?>