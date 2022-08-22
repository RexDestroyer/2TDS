<?php 

     $num1 = 30;

     if ($num1%10 === 0) {

        echo "O Número é divisível por 2, 5 e 10!";

      } else if (($num1%5 === 0) && ($num1%10 !== 0) && ($num1%2 !== 0)){

         echo "O Número é divisível apenas por 5!";

     } else if (($num1%2 === 0) && ($num1%5 !== 0) && ($num1%10 !== 0)) {

        echo "O Número é divísivel apenas por 2!";

     } else {

        echo "O número não é divísivel pelos parâmetros analisados (2, 5, 10)!";
     }



?>