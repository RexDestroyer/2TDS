<?php
/*
$corinthias = [

    12=>"Cassio",
    23=>"Fagner", 
    4=>"Gil",
    31=>"Balbuena",
    26=>"Fabio Santos",
    5=>"Maycon",
    37=>"Du Queiroz", 
    8=>"R. Augusto",
    10=>"William",
    9=>"R. Guedes",
    7=>"Y. Alberto"
];

//Ordena um array em ordem Inversa ao Alfabeto (da última para a primeira letra)
arsort($corinthias);
echo '<pre>';
print_r($corinthias);
echo '</pre>';

//Ordena um array em ordem Alfabética (da primeira para a última letra)
asort($corinthias);
echo '<pre>';
print_r($corinthias);
echo '</pre>';

//Ordena um array em ordem Alfabética, porém literalemn
sort($corinthias);
echo '<pre>';
print_r($corinthias);
echo '</pre>';



//Filtrar Elementos de uma Array
$numeros = [1,2,3,4,5,6,7,8,9,10];

function pares($valor) {

if($valor % 2 == 0) 
    return $valor;

}


//Sintaxe da função: array_filter( variável ou array, 'nome da função desejada com parâmetro de filtragem') LEMBRE DAS ASPAS SIMPLES NA FUNCAO
$pares = array_filter($numeros, 'pares');

echo '<pre>';
print_r($pares);
echo '</pre>';*/


//Criptografia

$senha = 'Albion Online é um MMOrpg sandbox em que você escreve sua própria história';
echo $senha . '<br><br>';

//base 64
$valor_criptografado = base64_encode($senha); 
echo $valor_criptografado;
echo '<br><br>';

//descriptografando base64
$valor_descriptografado = base64_decode($valor_criptografado);
echo $valor_descriptografado;
echo '<br><br>';

//MD5
$valor_criptografado = md5($senha);
echo $valor_criptografado;
echo '<br><br>';


//SHA1
$valor_criptografado = sha1($senha);
echo $valor_criptografado;
echo '<br><br>';



?>