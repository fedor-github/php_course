<?php

// You get the users list.
// You could get it from the DB or through API, it doesn't matter.
// In this example you get it from JSON file.

$usersJson = file_get_contents('users.json');
$users = json_decode($usersJson, true);

// This list contains user emails, and you job is to send a letter to each user, using barSender() function.

function barSender($email, $login) {
    $year = (new DateTime())->format('Y');
    $mail = <<<MAIL
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
Hello dear $login!
Check out our new feature at https://great-company.com/new-feature, and be the first to try it for free!

-------------------------------------------------------------------
You are receiving this email because you signed up for an account with Great-Company.com.

This email is intended for $email.

To manage which emails you receive from us or to unsubscribe, please visit the following link:
https://great-company.com/unsubscrite.php

Our Great Company USA, LLC
3017 Mante Unions Suite #740 East Keagan, NY 48700
© Copyright $year Our Great Company USA, LLC. All Rights Reserved.

-------------------------------------------------------------------
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
MAIL;
    file_put_contents('mailing-' . time() . '.eml', $mail, FILE_APPEND);
}

// But the problem is that testers use emails like user+date@gomain.com to register test accounts.
// And there are a bunch of them. Sending them emails is useless and costs the company a few dollars per mailing.
// In a month it's a decent amount of money comes out.
// Your job is to exclude such emails from the mailing list.

foreach ($users as $user) {
    if (!preg_match('/\+{1}\d+@/', $user['email'])) {
        barSender($user['email'], $user['login']);
    }
}

echo 'Done!' . PHP_EOL;
