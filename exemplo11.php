<?php

class AreaCalc
{
    public static $pi = 3.141517;

    static function areaCirculo($raio)
    {
        return self::$pi * $raio * $raio;

    }
}

$raioAtual = 10;
$area = AreaCalc ::areaCirculo($raioAtual);
$valorPi = AreaCalc::$pi;
echo "Área do círculo de raio $raioAtual é $area <br>";
echo "Valor de Pi = $valorPi";