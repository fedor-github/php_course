<?php

// You have some dirty script.

$script = file_get_contents('dirty_script.php');

// Your job is to clean it of single-line comments (like this one, for example).

$fixedScript = preg_replace('#//(?<!http://)(?!.*\?>.*).+$#m', '', $script);

file_put_contents('fixed_script.php', $fixedScript);
