<?php

    $array = [
        [
            'name' => 'Emanuel',
            'lastname' => 'Rista',
            'votes' => [7,5,7,3,2,9,6,6]
        ],
        [
            'name' => 'Mirko',
            'lastname' => 'Guerra',
            'votes' => [1,2,8,6,4,10,6,5]
        ],
        [
            'name' => 'Nicola',
            'lastname' => 'Melito',
            'votes' => [8,8,7,4,2,4,9,6]
        ],
    ];
    
    foreach ($array as $student) {
        echo "<div>";
        foreach ($student as $key => $value) {
            if($key == "votes"){
                $average = array_sum($value)/count($value);
                echo "<h3>Voto Medio: " . number_format((float)$average, 2, '.', '') . "</h3>";
            } elseif ($key == "name"){
                echo "<h1>" . $value . " ";
            } else{
                echo $value . "</h1>";
            }
        }
        echo "</div>";
    }
