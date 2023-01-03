<?php

// $message = "Hello again!";
// $name = "Connor";
// $count = 3;
// $price = 3.33;
// $is_admin = true;
// $data = null;
// $array = [
//     1 => "first post",
//     2 => "second post",
//     3 => "third post"
// ];

// var_dump($message);
// var_dump($price * $count);
// var_dump($message . " " . $name);
// var_dump($array);

// foreach ($array as $article) {
//     echo $article, ", ";
// }

// $month = 1;

// while ($month <= 12) {
//     echo $month . ", ";
//     $month = $month + 1;
// }


// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
// }


// $hour = 22;

// if ($hour < 12) {
//     echo 'good morning';
// } elseif ($hour < 18) {
//     echo 'good afternoon';
// } elseif ($hour < 22) {
//     echo 'good evening';
// } else {
//     echo 'good night';
// }

// $day = 'Sat';

// switch ($day) {
//     case "Mon":
//         echo "Monday";
//         break;
//     case "Tue":
//         echo "Tuesday";
//         break;
//     case "Wed":
//         echo "Wednesday";
//         break;
//     case "Thur":
//         echo "Thursday";
//         break;
//     case "Fri":
//         echo "Friday";
//         break;
//     default:
//         echo "no work";
// }

$articles = ["first post", "second post", "third post"];

if (empty($articles)) {
    echo "no articles";
} else {
    foreach ($articles as $article) {
        echo $article, ", ";
    }
}
