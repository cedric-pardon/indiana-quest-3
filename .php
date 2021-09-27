
<?php

$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$length = strlen($message1) /2;

$rest1 = substr($message1, 5, -8);

$message1 = $rest1;
$message1 = str_replace('@#?', '   ' ,$rest1);

echo strrev ($message1) . "<br>" ;



$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$length = strlen($message2) /2;

$rest2 = substr($message2, 5, -18);

$message2 = $rest2;
$message2 = str_replace( '@#?', '  ', $message2);

echo strrev ($message2) . "<br>" ;



$message3 = "aopi?sgnirts@#?sedhtg+p9l!";
$length = strlen($message3) /2;

$rest3 = substr($message3, 5, -8);

$message3 = $rest3;
$message3 = str_replace( '@#?', '  ', $message3);

echo strrev ($message3) . "<br>" ;


?>


j'ai appris
toutes les ficelles
des strings

