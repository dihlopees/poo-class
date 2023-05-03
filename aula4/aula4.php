<?php

class Exemplo {
    public static $propriedade_estatica = "isso é uma propriedade estatica";

    public static function metodo_estatico() {
        // echo "isso é um metodo estatico";
        echo self::$propriedade_estatica;

    }
}

// echo Exemplo::$propriedade_estatica;

Exemplo::metodo_estatico();

class Carro {
    public static $rodas = 4;

    public static function getRodas() {
        return self::$rodas;
    }
}
echo '<br>';
echo '<br>';
echo '<br>';
echo " o carro possui: ". Carro::$rodas . " rodas <br>";
echo " o carro possui: ". Carro::getRodas(). " rodas <br>";
?>