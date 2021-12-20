<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->


<?php


$arrayNumeri = array(); 
for($i=0; $i< 15; $i++){
  $controllo = true;
  while($controllo){ //ripeto fino a qauando non diventa false
    $numero = rand(0,300);
    if(!in_array($numero, $arrayNumeri)){ //controllo che il numero non sia già presente
      $arrayNumeri[] = $numero; //aggiungo il numero all'array
      $controllo = false;
    }
  }
};

var_dump($arrayNumeri);


?>