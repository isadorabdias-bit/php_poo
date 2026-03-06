<?php

class Funcionario
{
    private $nome;
    private $salario;
    private $previdencia;
    private $desconto;

    public function __construct($nome, $salario, $previdencia)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
    }

    public function calcularDesconto()
    {
        return number_format($this->salario * 0.275 + $this->previdencia, 2, ',', '.');
    }

}

$joao = new Funcionario('João Filho', 1000, 100);
$maria = new Funcionario('Maria Rute', 2000, 200);      
$jose = new Funcionario('José Salgado', 3000, 300);

echo "O valor do desconto de $joao->nome é de R$ $joao->Desconto. <br>";
echo "O valor do desconto de $maria->nome é de R$ $maria->Desconto. <br>";
echo "O valor do desconto de $jose->nome é de R$ $jose->Desconto. <br>";