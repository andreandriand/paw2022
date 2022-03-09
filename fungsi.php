<?php 

function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i=2; $i < $num; $i++) { 
        if ($num % $i == 0) {
            return "Bilangan $num bukan bilangan prima";
        }
    }
    return "Bilangan $num adalah bilangan prima";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>
</head>
<body>
    <p>Apakah Bilangan 12 adalah prima?</p> <p><?php echo isPrime(12) ?></p>
    <br><br>
    <p>Apakah Bilangan 54 adalah prima?</p> <p><?php echo isPrime(54) ?></p>
    <br><br>
    <p>Apakah Bilangan 89 adalah prima?</p> <p><?php echo isPrime(89) ?></p>
</body>
</html>