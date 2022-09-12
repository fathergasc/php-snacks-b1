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
        $students = [
            [
                'name' => 'Andrea',
                'lastname' => "Giusti",
                'grades' => [
                    'math' => '9',
                    'history' => '8',
                    'latin' => '9',
                ]
            ],
            [
                'name' => 'Sofia',
                'lastname' => "Canovi",
                'grades' => [
                    'math' => '6',
                    'history' => '7',
                    'latin' => '9',
                ]
            ],
            [
                'name' => 'Greta',
                'lastname' => "Berti",
                'grades' => [
                    'math' => '10',
                    'history' => '8',
                    'latin' => '6',
                ]
            ],
            [
                'name' => 'Marco',
                'lastname' => "Scaraia",
                'grades' => [
                    'math' => '7',
                    'history' => '7',
                    'latin' => '6',
                ]
            ],
        ]
    ?>

    <ul>
        <?php
        for ($i = 0; $i < count($students); $i++) {
            $gradeAverage = round(($students[$i]['grades']['math'] + $students[$i]['grades']['history'] + $students[$i]['grades']['latin']) / count($students[$i]['grades']), 2);
            echo "<li>" . $students[$i]['name'] . " " . $students[$i]['lastname'] . " - Media voti: " . $gradeAverage . "</li>";
        }
        ?>
    </ul>
</body>
</html>