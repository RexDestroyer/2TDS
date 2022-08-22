<?php


$dj = ["Tiesto", "Steve Aoki", "David Guetta", "Skrillex", "Martin Garrix", "Axwell", "Sudarius", "Benny Benassi" ];


$cantor = ["The Weeknd"];

$cantora = [ "Sia", "Beyonce", "Britney Spears", "Madona", "Adele" ];

$banda = ["Kiss", "Queen", "ABRA"]; 

/*
echo "<pre>";
print_r($cantora);
echo "</pre>";

//Comando para indentificar se tal elemento é um array ou não
if (is_array($dj)){

echo "É um Array";

} else {

    echo "Não é um Array";
}


//Comando para idetnificar se certo elemento está dentro de um array ou não
if (in_array("Sia", $cantora)) {

echo "É";

} else {

echo "Não é";

}


//Comando para contar a quantidade de elementos dentro de um array
echo count($dj);


//Comando para unir os conteúdos de vários em um só 
$artista = array_merge($dj, $cantora);

echo "<pre>";
print_r($artista);
echo "</pre>";


//Comando para incrementar certo elemento NO FINAL de um array, podendo também unir arrays
array_push($cantora, $cantor);
echo '<pre>';
print_r($cantora);
echo '</pre>';

//Comando para incrementar certo elemento NO COMEÇO de um array, podendo tambpem unir arrays
array_unshift($cantora, $cantor);
echo '<pre>';
print_r($cantora);
echo '</pre>';

//Comando para eliminar O PRIMEIRO elemento de um array
array_shift($banda);
echo '<pre>';
print_r($banda);
echo '</pre>';

//Comando para eliminar O ÚLTIMO elemento de um array
array_pop($banda);
echo '<pre>';
print_r($banda);
echo '</pre>';*/



$lista = ['Arroz', 'Feijão', 'Macarrão', 'Batata', 'Arroz', 'Batata'];

echo '<pre>';
print_r($lista);
echo '</pre>';

$lista = array_unique($lista);
echo '<pre>';
print_r($lista);
echo '</pre>';








?>