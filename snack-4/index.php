<?php

    $nItems = 15;
    $numArray = [];

    while (count($numArray) < $nItems) {

        $number = rand(1, 100);
        if (!in_array($number, $numArray)) {

            $numArray[] = $number;

        }

    }
    foreach ($numArray as $num) {
        echo $num . "<br>";
    }

?>