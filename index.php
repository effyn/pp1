<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
<h1>Pair Program 1</h1>

<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('functions.php');

    $numbers = array(7,9,8,9,8,8,6);
    printArr($numbers);
    echo '<p>Largest: ' . largest($numbers) . '</p>';
    echo '<p>Average: ' . average($numbers) . '</p>';
    echo '<p>Without duplicates: ';
    print_r(removeDups($numbers));
    echo '</p>';
    echo '<p>Distribution: ';
    print_r(distribution($numbers));
    echo '</p>';
?>

</body>
</html>