<?php

class Conta 
// superclasse
{
    public $numero;
    public $saldo;

    // metodos construtor
    function __construct($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
        // this pegando os atributos da classe conta
    }

    // metodos getters e setters
    public function getNumero()
    {
        return $this->numero;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    protected function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    // metodos
    function creditar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }

    function debitar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }

    function transferir($outraConta, $valor)
    {
        if($this->saldo >= $valor) {
           $this->debitar($valor);
           $outraConta->creditar($valor);
        }
    }     
}

class Poupanca extends Conta
// subclasse
{
    public $juros;

    function __construct($numero, $saldo, $juros)
    {
       $this->juros = $juros;
       parent::__construct($numero, $saldo);
    }

    function creditar($valor)
    {
        parent::creditar($valor);
        $this->atualizarJuros();
    }

    function  atualizarJuros()
    {
        $novoSaldo = $this->getSaldo() * (1 + $this->juros);
        $this->setSaldo($novoSaldo);
    }

}

$conta= new Conta(1, 150);
$conta->creditar(50);
$conta->debitar(100);
echo "Saldo da conta: {$conta->getNumero()}: {$conta->getSaldo()} <br>";

$poupanca= new Poupanca(2, 150, 0.10);
$poupanca->creditar(50);
$poupanca->debitar(100);
$poupanca->atualizarJuros();
echo "Saldo da conta: {$poupanca->getNumero()}: {$poupanca->getSaldo()} <br>";