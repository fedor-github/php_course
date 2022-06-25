<?php

// You have some text, containing v4 and v6 ip addresses.

$text = <<<TXT
Distinctio adipisci dolore laudantium sit laudantium. Nesciunt possimus enim ipsam veniam nulla. 41.213.1.10 Autem rem temporibus dignissimos. Enim maiores a magnam possimus aspernatur quia voluptate. Quia non dignissimos quaerat est vel aut eius.
Dolor voluptas temporibus repellat voluptatum voluptas libero aut enim. Nisi magni esse aliquam nesciunt veritatis in. 87f8:7433:ad9:763d:3af6:4be3:ee34:5367 Possimus odit harum nihil adipisci et. Ut ab voluptates maxime et amet odio quo. Illum et sit laboriosam consequatur voluptatibus qui qui. Tempore nemo dolor impedit assumenda alias pariatur.
Nam aut sed quidem qui et. Eaque et qui aliquid voluptas rerum. Reprehenderit numquam quo ea sapiente a ea eos. Maiores earum molestiae amet culpa sit adipisci. 177.126.89.238 Dolores aut quisquam quos minima autem. Ullam omnis tempore eum veritatis pariatur ut praesentium. Id odit sit omnis deserunt velit sunt. Voluptas natus officia ducimus omnis eos.
Voluptates neque aliquid ut in alias enim sed. Delectus atque aut sed sed. 177.84.117.105 Debitis esse dignissimos nostrum repellat doloremque sit voluptatem. Qui rem iste aut harum beatae. Aliquid architecto et quo est nesciunt minima. Repellendus voluptatem dolores sint perspiciatis.
Ipsum et blanditiis est quas temporibus. At et corrupti aliquam labore temporibus velit qui cum. Unde laudantium necessitatibus ipsam asperiores nobis in accusantium nesciunt. 12.49.147.88 Sed omnis error eum esse vel ullam in. Minus vero ipsa velit aut corrupti cumque quasi. Error sequi ea sunt sed porro veniam id.
Nam ad dolorem maiores sed enim. Qui ut eos repudiandae nisi cumque et officiis. Et impedit mollitia pariatur. 101.128.203.133 Adipisci culpa enim qui. Hic commodi fuga beatae sed est rerum id. Ut totam necessitatibus quia.
Voluptas autem adipisci fuga laboriosam et nam molestiae. Blanditiis maiores et ipsam eveniet rerum reiciendis veritatis. Officiis quia dolores non et eum id ratione. Cumque est aut rerum voluptas. 2182:302a:e764:a258:904a:6b90:4682:442b Necessitatibus impedit facere magni et ea. Earum voluptas est nemo aspernatur vel. Non quisquam inventore culpa impedit et sed eum nam.
Nesciunt dolorum asperiores eum dolorum ut placeat autem. Veniam voluptatem eos consequatur alias assumenda. Ut cumque nostrum dolorem reprehenderit voluptatem molestias voluptas est. 177.24.232.246 Nobis quibusdam voluptate cumque enim ut numquam. Iusto voluptas vero earum enim. Aut tempore numquam omnis ut aut.
Voluptatibus totam et esse suscipit expedita pariatur et. Et dolores et inventore in qui eum sapiente ut. Rem beatae cumque voluptas occaecati occaecati vel. 57.31.63.96 Quia eum quis molestiae nam et. Natus delectus corrupti ut fugiat repellat. Exercitationem saepe enim inventore laudantium. A rem magnam quas quasi optio.
Numquam a mollitia deleniti nesciunt omnis quaerat est. Sed assumenda laborum qui cum nihil. Quo impedit incidunt sit tempore repellendus. 6824:74e7:4153:ea71:9383:3961:5832:2e5f Et mollitia laboriosam accusantium hic qui tenetur sunt qui. Impedit reiciendis incidunt at provident et. Molestiae similique sit eum fugiat.
TXT;

// Find all ip addresses and put them into $ipv4, $ipv6 arrays.
// Display the arrays.

$regExp = [
    'ipv4' => '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}/',
    'ipv6' => '/([\da-f]{1,4}:){7}[\da-f]{1,4}/',
];

$parsed = [];
foreach ($regExp as $key => $pattern) {
    $res = preg_match_all($pattern, $text, $matches);
    $parsed[$key] = $matches[0];
}

var_dump($parsed);
