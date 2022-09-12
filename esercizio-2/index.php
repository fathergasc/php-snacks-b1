<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $randomNumbers = [];
    for ($i = 0; $i < 15; $i++) {
        $randomNumber = rand(1, 100);
        if (!in_array($randomNumber, $randomNumbers)) {
            $randomNumbers[$i] = $randomNumber;
        }
    }
    ?>

    <div><?php var_dump($randomNumbers) ?></div>
    
</body>
</html>