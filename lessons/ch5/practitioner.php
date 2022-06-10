<html>
<head>
    <title>regex</title>
</head>
<body>
<?php
$trickyStr = <<<Andrey
one two ~three~ four %fi~ve% six seven
Andrey;
echo "<h3>$trickyStr</h3><br>";

$res = preg_match_all('/(~|%)(.+?)(\1)/', $trickyStr, $matches);
//var_dump($matches);

if (empty($res)) {
    echo "<h2>Sorry, nothing found...</h2>";
} else {
    echo '<ls>';
    foreach ($matches[2] as $idx => $match) {
        echo "<li>$match</li>";
    }
    echo '</ls>';
}
?>
</body>
</html>
