<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number</title>
</head>
<body>

<?php

$random = rand(1,10);

/*
$result = $random % 2;

if ($result == 0) {

echo $random." é par.";

} else {

echo $random." é ímpar.";

}*/


echo ($random%2) == 0 ? $random." é PAR" : $random." é ÍMPAR";

?>
</body>
</html>

