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
    $alert = '';
    
    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {
        $emailCheck = $_GET['email'];
        $nameCheck = $_GET['name'];
        $ageCheck = $_GET['age'];
        if (strpos($emailCheck, '@') !== false && strpos($emailCheck, '.') !== false && strlen($nameCheck) > 3 && is_numeric($ageCheck)) {
            $alert = "Accesso riuscito";
        } else {
            $alert = "Accesso negato";
        };
    } else {
        $alert = "Dati inseriti non validi o incompleti";
    };

    ?>

    <div><?php echo $alert; ?></div>


</body>

</html>