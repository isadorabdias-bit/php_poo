<?php

class visibilidade{
    public $varPublic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }

    public function publicfunc(){
        echo "metodo publico<Br>";
    }

    protected function protectedfunc(){
        echo "metodo protegido<Br>";
    }

    private function privatefunc(){
        echo "metodo privado<Br>";
    }

    public function callProtected()
    {
        $this->protectedfunc();
    }

    public function callPrivate()
    {
        $this->privatefunc();
    }
}

$teste = new visibilidade(1, 2, 3);

echo "Atributo Public: {$teste->varPublic}";
// echo "Atributo Protected: {$teste->varProtected}";
// echo "Atributo Private: {$teste->varPrivate}";

echo "<br>";

$teste->publicfunc();
$teste->callProtected();
$teste->callPrivate();