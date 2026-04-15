<?php
class Carro {
    // 🚩 RISCO: Atributo público permite valores ilegais
    private $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function setVelocidade($velocidade) {
        if ($velocidade < 0) {
            $this->velocidade = 0; // Velocidade mínima
        } elseif ($velocidade > 200) {
            $this->velocidade = 200; // Velocidade máxima
        } else {
            $this->velocidade = $velocidade;
        }
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// Ajuste de velocidade usando o método protegido
// A visibilidade protegida exige que a classe exponha um método público, se necessário.
$meuCarro->setVelocidade(5000); // Velocidade de foguete?
$meuCarro->setVelocidade(-60);   // Carro andando no tempo?

echo "Modelo: " . $meuCarro->getModelo() . "<br>";
echo "Velocidade atual: " . $meuCarro->getVelocidade() . " km/h";
?>