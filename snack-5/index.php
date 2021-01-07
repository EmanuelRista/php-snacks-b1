<?php
    $chapter = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum tincidunt nunc. Morbi odio justo, facilisis ac ultrices sit amet, finibus id lorem. Duis cursus nec arcu ut ullamcorper. Donec sit amet orci sit amet elit efficitur sagittis vitae sed elit. In consequat non ante elementum ornare. Maecenas porta tempor magna, id facilisis diam maximus eu. Praesent in erat dolor. Donec sollicitudin augue ac urna aliquam, vitae rhoncus augue pulvinar. Morbi suscipit ipsum nec odio sollicitudin accumsan. Sed orci orci, condimentum at malesuada id, ornare laoreet ante. Cras sed volutpat quam, et mattis dolor. Curabitur posuere arcu condimentum risus maximus pulvinar. Aliquam lacinia velit at dolor fringilla hendrerit.";

    $paragraph = explode(".", $chapter);
    foreach($paragraph as $p){
        if ($p != ""){
            echo "<p>" . $p . ".</p>";
        }

    }
    
    ?>