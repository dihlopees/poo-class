<?php

class Pessoa
{
    private static $totalPessoas = 0;
    private $nome;
    private $email;

    public function __construct($nome, $email)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        self::$totalPessoas++;
    }

    public static function getTotalPessoas()
    {
        return self::$totalPessoas;
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        if (!empty($nome)) {
            $this->nome = $nome;
        } else {
            echo " o nome nao pode ser vazio";
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if (!empty($email)) {
            $this->email = $email;
        } else {
            echo " o email nao pode ser vazio";
        }
    }
}

$pessoa1 = new Pessoa("João", "teste@teste");
$pessoa2 = new Pessoa("Maria", "teste@teste");
$pessoa3 = new Pessoa("Maria", "teste@teste");
echo '<br>';

echo $pessoa1->getNome();
echo '<br>';

echo $pessoa2->getEmail();
echo '<br>';

echo $pessoa1->setNome("");
echo '<br>';
echo $pessoa1->getNome();
echo '<br>';


echo "quantidade total de pessoas: " . Pessoa::getTotalPessoas();
?>