<?php

print ("1) Crie 4 funções variadas. <br/> Função 1:");

function dobro($num){
    echo "O quadrúplo de ${num} é ". $num *24;
}
echo dobro(354);

echo "<br/>";
print ("Função 2:");

function cadastro($carro, $ano){
    echo "O carro " . $carro . ", foi lançado no ano " . $ano;
}

$carroP = "Porshe Coupé";
$anoX = "1975";
cadastro($carroP, $anoX);

echo "<br/>";
print ("Função 3: O valor da passagem é: ");
function passagem($num1 = 4.95){
    return $num1;
}

echo passagem();

echo "<br/>";
print ("Função 4: Divisãod e 10 por 2 =  ");
function div ($n1, $n2){
    $operacao = $n1 / $n2;
    return $operacao;
}

echo div(10, 2);

echo "<br/>";
echo "<br/>";
print ("2) Crie um array. <br/> 3) Percorra esse array com um foreach.");
echo "<br/>";

$time = array("Atlético - MG", "América-MG", "Flamengo", "Palmeiras");
foreach($time as $brasileirao){
    echo $brasileirao. "<br/>";  
}



?>