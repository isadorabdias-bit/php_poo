<?php

function calcularDesconto($salario, $previdencia) {
    return number_format($salario*0.275 + $previdencia, 2, ',', '.');
}

$joaonNome = 'João Filho';
$joaoDescontos = calcularDesconto(1000, 100);

$mariaNome = 'Maria Rute';
$mariaDescontos = calcularDesconto(1000, 200);

$joseNome = 'José Salgado';
$joseDescontos = calcularDesconto(1000, 300);

echo "O valor do desconto do INSS de $joaoNome é R$ $joaoDescontos. <br>"; 
echo "O valor do desconto do INSS de $mariaNome é R$ $mariaDescontos. <br>";
echo "O valor do desconto do INSS de $joseNome é R$ $joseDescontos. <br>";