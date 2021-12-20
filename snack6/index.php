<?php

// ## Snack 6
// Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.


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


// var_dump ($db) ;

// foreach(array_keys($db) as $title){
//   // var_dump ($db[$title]) ;
//   var_dump($title);
//   for ($i=0; $i<count($db[$title]); $i++){
//     // var_dump($db[$title][$i]);

    
    
//     foreach(array_keys($db[$title][$i]) as $element){


//       var_dump($db[$title][$i][$element]);

//     }

//   };
// };






?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <div class="grey" style="border: 3px solid grey;">
  <p> <?php 
  foreach(array_keys($db) as $title){ 
    if($title == 'teachers'){

      echo "$title: <br>";
      
      for ($i=0; $i<count($db[$title]); $i++){
        echo "<br>";
        foreach(array_keys($db[$title][$i]) as $element){
          $name = $db[$title][$i][$element];

          echo " $name " ;
          
        };
      };
    }
  }; ?> </p>

  </div>

  <div class="green" style="border: 3px solid green;">
  <p> <?php 
  foreach(array_keys($db) as $title){ 
    if($title == 'pm'){

      echo "$title: <br>";
      
      for ($i=0; $i<count($db[$title]); $i++){
        echo "<br>";
        foreach(array_keys($db[$title][$i]) as $element){
          $name = $db[$title][$i][$element];

          echo " $name ";
          
        };
      };
    }
  }; ?> </p>


  </div>

</body>
</html>