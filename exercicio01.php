<?php

$joaoSalario = 1000;
$joaoPrevidencia = 100;
$joaoNome = 'João Filho';
$joaoDescontos = number_format($joaoSalario*0.275 + $joaoPrevidencia, 2, ',', '.');

$mariaSalario = 1000;
$mariaPrevidencia = 100;
$mariaNome = 'Maria Rute';
$mariaDescontos = number_format($mariaSalario*0.275 + $mariaPrevidencia, 2, ',', '.');

$joseSalario = 1000;
$josePrevidencia = 100;
$joseNome = 'José Salgado';
$joseDescontos = number_format($joseSalario*0.275 + $josePrevidencia, 2, ',', '.');

echo "O valor do desconto do INSS de $joaoNome é R$ $joaoDescontos. <br>"; 
echo "O valor do desconto do INSS de $mariaNome é R$ $mariaDescontos. <br>";
echo "O valor do desconto do INSS de $joseNome é R$ $joseDescontos. <br>";