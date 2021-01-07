<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snack6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $teacher = "class='teacher'";
    $pm = "class='pm'";
    $db = [
        'teachers' => [
            [
                'name' => 'Emanuel',
                'lastname' => 'Rista'
            ],
            [
                'name' => 'Iva',
                'lastname' => 'Zanicchi'
            ]
        ],
        'pm' => [
            [
                'name' => 'Sergio',
                'lastname' => 'Berardo'
            ],
            [
                'name' => 'Pippo',
                'lastname' => 'De Pippis'
            ]
        ]
    ];

    foreach ($db as $type => $elPerson) {
        if ($type == "teachers") {
            $style = $teacher;
        } else {
            $style = $pm;
        }
        foreach ($elPerson as $person) {
            echo "<div " . $style . ">";
            foreach ($person as $key => $element) {
                echo $key . ": " . $element . "<br>";
            }
            echo "</div>";
        }
    }
    ?>

</body>

</html>