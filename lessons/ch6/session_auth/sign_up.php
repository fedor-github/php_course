<?php
/**
 * Registration Form
 */

require_once __DIR__ . '/db.php';

session_start();

$error = '';

if (
    !empty($_POST['user_name'])
    && !empty($_POST['password'])
    && !empty($_POST['password2'])
    && $_POST['password'] === $_POST['password2']
) {
    $users = readDb();
    
    $name = $_POST['user_name'];
    
    $users[$name] = $_POST['password'];
    writeDb($users);
    
    $_SESSION['userName'] = $name;
    header("Location: /index.php", true, 302);
    exit();
} else {
    if (
        !empty($_POST['password'])
        && !empty($_POST['password2'])
        && $_POST['password'] !== $_POST['password2']
    ) {
        $error = 'Passwords don\'t match!';
    }
}
?>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>

<h3>Sign Up</h3>

<form method="post">
    <label>
        Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="user_name">
    </label>
    <br>
    
    <label>
        Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password" name="password">
    </label>
    <br>
    
    <label>
        Repeat Password
        <input type="password" name="password2">
    </label>
    <br>
    
    <input type="submit" value="sign up">
</form>

<?php
if (!empty($error)) {
    echo "<p style='color: red'>$error</p>";
}
?>

</body>
</html>
