<?Php

require_once('./config.php');
require_once('src/PessoaFisica.php');
require_once('src/PessoaFisicaController');

$date = new DateTime('2000-01-01');
$pessoaFisicaController = new PessoaFisicaController($entityManager);
$pessoaFisicaController->create('Maria', '45788455544', $date);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoas</title>
</head>
<body>
    <h2> Cadastro </h2>
    <form method="POST">
        <label>Nome </label>
        <input type="text" name="nome" />

        <label>Cpf </label>
        <input type="text" name="cpf" />

        <label>Data de nascimento </label>
        <input type="date" name="dataNascimento" />

        <input type="submit">Enviar</input>
</body>
</html>   


