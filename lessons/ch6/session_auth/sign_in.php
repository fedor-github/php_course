<?php
/**
 * Authorization Form
 */

require_once __DIR__ . '/db.php';

session_start();

$error = '';

if (!empty($_POST['user_name']) && !empty($_POST['password'])) {
    $users = readDb();
    
    $name = $_POST['user_name'];
    if (!empty($users[$name])
        && $users[$name] === $_POST['password']
    ) {
        $_SESSION['userName'] = $name;
        header("Location: /index.php", true, 302);
        exit();
    } else {
        unset($_SESSION['userName']);
        $error = 'Unknown username or password';
    }
}
?>
<html>
<head>
    <title>Sign In</title>
</head>
<body>

<h3>Sign In</h3>

<p>
    If you don't have an account please
    <a href="/sign_up.php">
        Sign Up
    </a>
</p>

<form method="post">
    <label>
        Username
        <input type="text" name="user_name">
    </label>
    <br>
    <label>
        Password&nbsp;
        <input type="password" name="password">
    </label>
    <br>
    <input type="submit" value="sign in">
</form>

<?php
if (!empty($error)) {
    echo "<p style='color: red'>$error</p>";
}
?>

</body>
</html>
