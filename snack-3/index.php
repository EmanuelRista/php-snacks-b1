<?php

$posts = [

    '05/01/2020' => [
        [
            'title' => 'Post 1',
            'author' => 'Emanuel Rista',
            'text' => 'Text post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Emanuel Rista',
            'text' => 'Text post 2'
        ],
    ],
    '06/01/2020' => [
        [
            'title' => 'Post 3',
            'author' => 'Emanuel Rista',
            'text' => 'Text post 3'
        ]
    ]
];

foreach ($posts as $date => $elDate) {
    echo $date . "<br>" . "<br>";

    foreach ($elDate as $post) {

        foreach ($post as $key => $element) {
            echo $key . ": " . $element . "<br>";
        }
        echo "<br>";
    }
}
