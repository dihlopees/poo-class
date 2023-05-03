<?php
require_once("Escola.php");
require_once("Pessoa.php");
require_once("Aluno.php");
require_once("Bibliotecario.php");
require_once("Professor.php");


echo 'Prova 2 POO - Aluna: Ingrid R. Lopes de Oliveira RA: 22.6980-1<br>';

$bibliotecario = new Bibliotecario("Sr. Roberto", 26, '343424212345', '10:00 as 15:00');

$aluno = new Aluno("Ana", 17, "02333312309", "11121");
$aluno2 = new Aluno("João", 19, "12333312309", "67890");
$aluno3 = new Aluno("Pedro", 21, '99933312309', '11121');


$professor = new Professor('Prof. Carlos', 50, '12345678909', 200, 2);
$professor2 = new Professor('Profª. Lúcia', 45, '77776600931', 300, 2);


$professor->atribuirFaltaAoAluno($aluno, 5);
$professor->atribuirNota($aluno, 100);

$professor2->atribuirFaltaAoAluno($aluno2, 2);
$professor2->atribuirNota($aluno2, 80);

$professor->atribuirFaltaAoAluno($aluno3, 10);
$professor->atribuirNota($aluno3, 90);

echo "<br>";
echo "---------------------------------------------------------------------------- <br>";
echo "Alunos:  <br>";

echo "Nome = " . $aluno->getNome() . " CPF = " . $aluno->getCpf() . "  RA = " . $aluno->getRa() . "  Faltas = " . $aluno->getFaltas() . "   Nota = " . $aluno->getNotas() . "<br>";
echo "Nome = " . $aluno2->getNome() . " CPF = " . $aluno2->getCpf() . "  RA = " . $aluno->getRa() . "   Faltas = " . $aluno2->getFaltas() . "   Nota = " . $aluno2->getNotas() . "<br>";
echo "Nome = " . $aluno3->getNome() . " CPF = " . $aluno3->getCpf() . "  RA = " . $aluno->getRa() . "   Faltas = " . $aluno3->getFaltas() . "   Nota = " . $aluno3->getNotas() . "<br>";


echo "<br>";
echo "<br>";
echo "---------------------------------------------------------------------------- <br>";
echo "Professores:  <br>";
echo "Nome = " . $professor->getNome() . "   Faltas = " . $professor->getFaltasDoProfessor() . " Idade = " . $professor->getIdade() . " CPF = " . $professor->getCpf() . "  Salario por aula = " . $professor->getSalarioPorAula() . "<br>";
echo "Nome = " . $professor2->getNome() . "   Faltas = " . $professor2->getFaltasDoProfessor() . " Idade = " . $professor2->getIdade() . " CPF = " . $professor2->getCpf() . "  Salario por aula = " . $professor2->getSalarioPorAula() . "<br>";

echo "<br>";
echo "<br>";
echo "---------------------------------------------------------------------------- <br>";
echo "Bibliotecarios:  <br>";
echo "Nome = " . $bibliotecario->getNome() . " Idade = " . $bibliotecario->getIdade() . " CPF = " . $bibliotecario->getCpf() . "  Horario de trabalho = " . $bibliotecario->getHorarioDeTrabalho() . "<br>";


echo "<br>";
echo "---------------------------------------------------------------------------- <br>";
echo "Escola: <br>";
echo "Total de Bibliotecarios: " . Escola::$totalDeBibliotecarios;
echo "<br>";
echo "Total de Alunos: " . Escola::$totalDeAlunos;
echo "<br>";
echo "Total de Professores: " . Escola::$totalDeProfessores;

echo "<br>";
echo "<br>";
echo "---------------------------------------------------------------------------- <br>";
echo "Pessoas: <br>";
echo "Total de Pessoas Cadastradas: " . Pessoa::$totalDePessoas;

?>