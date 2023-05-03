<?php
//classe pai
class Veiculo
{
    protected $marca;
    protected $modelo;
    protected $cor;
    protected $velocidade;
    protected $passageiros;
    protected $ligado;

    public function __construct($marca, $modelo, $cor)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->velocidade = 0;
        $this->passageiros = 0;
        $this->ligado = false;
    }

    public function acelerar($incremento)
    {
        if ($this->ligado) {
            $this->velocidade += $incremento;
            echo "Acelerando o veiculo " . $incremento;
        } else {
            echo "Veiculo esta desligado e nao pode acelerar";
        }
    }

    public function frear($freando)
    {
        if ($this->ligado) {
            $this->velocidade -= $freando;
            echo "freando o veiculo " . $freando;
        } else {
            echo "Veiculo esta desligado e nao pode frear";

        }
    }

    public function adicionarPassageiro($passageiros)
    {
        if ($passageiros > 0)
            $this->passageiros += $passageiros;

    }
    public function getVelocidade()
    {
        return $this->velocidade;
    }

    public function getPassageiros()
    {
        return $this->passageiros;
    }

    public function ligarVeiculo()
    {
        $this->ligado = true;
    }

    public function desligarVeiculo()
    {
        $this->ligado = false;
    }
}

class Carro extends Veiculo
{
    public function __construct($marca, $modelo, $cor)
    {
        parent::__construct($marca, $modelo, $cor);
    }

    public function adicionarPassageiro($passageiros)
    {
        if ($this->passageiros + $passageiros <= 5) {
            parent::adicionarPassageiro($passageiros);
        } else
            echo "carro nao pode ter mais de 5 passageiros";

    }

}

class Fusca extends Carro
{
    public function buzinar()
    {
        echo "buzina do fusca";
    }
}

class Porshe extends Carro
{
    public function acelerar($incremento)
    {
        parent::acelerar($incremento * 3);
    }
}

class Ferrari extends Carro
{
    public function acelerar($incremento)
    {
        parent::acelerar($incremento * 4);
    }
}

class Motocicleta extends Veiculo
{
    private $cilindrada;

    public function __construct($marca, $modelo, $cor, $cilindrada)
    {
        parent::__construct($marca, $modelo, $cor);
        $this->cilindrada = $cilindrada;
    }

    public function adicionarPassageiro($passageiros)
    {
        if ($passageiros <= 2) {
            parent::adicionarPassageiro($passageiros);
        } else {
            echo "moto nao pode ter mais de 2 passageiros";
        }
    }

    public function getCilindrada()
    {
        return $this->cilindrada;
    }

    public function empinar()
    {
        if ($this->ligado) {
            echo "a moto esta empinando";
        } else {
            echo "a moto ta desligada";
        }
    }
}
echo 'oi';

$fusca = new Fusca("volks", "fusca", "azul");
$porshe = new Porshe("porsche", '911', 'prata');
$ferrari = new Ferrari("ferrari", 'f40', 'vermelha');

$porshe->ligarVeiculo();
// $fusca->acelerar();
$porshe->acelerar(20);
// $ferrari->acelerar();


// echo $fusca->getVelocidade();
// echo '<br>';
// echo $porshe->getVelocidade(); 
// echo '<br>';
// echo $ferrari->getVelocidade();


echo '<br>';
echo '<br>';
echo '<br>';
?>