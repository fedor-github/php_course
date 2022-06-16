<?php
$birthday = new DateTime($_POST['birthday']);
$now = new DateTime();
$age = $now->diff($birthday);
?>
<html lang="en">
<head>
    <title>User Info</title>
</head>
<body>
<h3>Congratulations!</h3>
<p>Your name is: <?= $_POST['name'] ?></p>
<p>Your are <?= $age->format('%y') ?> years old</p>
</body>
</html>
