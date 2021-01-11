<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <p><strong>Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.</strong></p>

  <?php

  $posts = [

    '10/01/2019' => [
      [
        'title' => 'Post 1',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 1'
      ],
      [
        'title' => 'Post 2',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 2'
      ],
    ],
    '10/02/2019' => [
      [
        'title' => 'Post 3',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 3'
      ]
    ],
    '15/05/2019' => [
      [
        'title' => 'Post 4',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 4'
      ],
      [
        'title' => 'Post 5',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 5'
      ],
      [
        'title' => 'Post 6',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 6'
      ]
    ],
  ];

  foreach ($posts as $data => $messages) {
    echo "<h1>Post del $data</h1>";
    echo "<ul>";
    foreach ($messages as $key => $value) {
      echo "<li>" . $value['title'] . ": " . $value['text'] . "</li>";
    }
    echo "</ul>";
  }

  echo "<hr>";

  echo "<p><strong>Creare un array con 15 numeri casuali tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta</strong></p>";

  $nums = [];
  while (count($nums) < 15) {
    $random_num = rand(1, 100);
    if (!in_array($random_num, $nums)) {
      $nums[] = $random_num;
    }
  }

  var_dump($nums);

  echo "<hr>";

  echo "<p><strong>Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
  Prendere il paragrafo e suddividerlo in tanti paragrafi p. Ogni punto un
  nuovo paragrafo.</strong></p>";

  $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic obcaecati architecto laborum omnis quis minus velit voluptatem dolor ea illo tempora doloribus porro, nihil consectetur quia! Numquam culpa deleniti iusto perferendis id pariatur incidunt aliquid vero quia asperiores omnis nesciunt corrupti ad necessitatibus doloribus natus voluptatum itaque at molestias, earum dignissimos laboriosam? Tenetur minus repudiandae corporis totam ducimus vitae eius iure consectetur quibusdam at modi quidem molestiae quis dolor commodi, facere iusto labore dolore. Nam maiores dolore maxime incidunt, provident fugiat illum consequatur sit cumque, hic aperiam. Molestiae veritatis tempora, earum, odit, veniam modi et dolores laborum quos possimus non?";

  echo $text;

  echo "<hr>";

  $lorem_pars = explode(".", $text);

  foreach ($lorem_pars as $pars) {
    echo "<p>" . $pars . "</p>";
  }

  echo "<hr>";

  echo "<p><strong>Utilizzare questo array: https://pastebin.com/CkX3680A.
  Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
  e i PM in un rettangolo verde.</strong></p>";

  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];

  ?>

  <html>

  <head>
    <style type="text/css">
      .grey {
        background-color: grey;
      }

      .green {
        background-color: green;
      }
    </style>
  </head>

  <body>
    <?php

    echo "<div class='grey'>";

    foreach ($db['teachers'] as $teacher) {
      echo $teacher['name'] . " " . $teacher['lastname'] . "<br>";
    }

    echo "</div>";

    echo "<div class='green'>";

    foreach ($db['pm'] as $pm) {
      echo $pm['name'] . " " . $pm['lastname'] . "<br>";
    }

    echo "</div>";

    echo "<hr>";

    echo "<p><strong>Creare un array contenente qualche alunno di un’ipotetica classe.  Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.</p></strong>";

    $alunni = [
      [
        'name' => 'Emanuel',
        'lastname' => 'Rista',
        'votes' => [7, 5, 7, 3, 2, 9, 6, 6]
      ],
      [
        'name' => 'Mirko',
        'lastname' => 'Guerra',
        'votes' => [1, 2, 8, 6, 4, 10, 6, 5]
      ],
      [
        'name' => 'Nicola',
        'lastname' => 'Melito',
        'votes' => [8, 8, 7, 4, 2, 4, 9, 6]
      ],
    ];

    foreach ($alunni as $alunno) {
      echo $alunno['name'] . "<br>" . $alunno['lastname'] . "<br>" . (array_sum($alunno['votes']) / count($alunno['votes'])) . "<br><br>";
    }

    ?>
  </body>

  </html>
</body>

</html>