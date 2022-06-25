<?php

session_start();

if (empty($_SESSION['userName'])) {
    header("Location: /sign_in.php", true, 302);
    exit();
}

if (!empty($_POST['sign_out'])) {
    setcookie('PHPSESSID', '', time() - 1000000);
    header("Location: /sign_in.php", true, 302);
    exit();
}

?>
<html>
<head>
    <title>Main Page</title>
</head>
<body>

<h3>Main</h3>

<form method="post">
    <input type="hidden" name="sign_out" value="1">
    <input type="submit" value="sign out">
</form>

<p>Hello <i><?= $_SESSION['userName'] ?></i>!</p>

</body>
</html>
