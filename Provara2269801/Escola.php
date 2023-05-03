<?php

require_once("Pessoa.php");

class Escola extends Pessoa {
    static $totalDeAlunos;
    static $totalDeProfessores;
    static $totalDeBibliotecarios;

    static function adicionarAlunos(){
        self::$totalDeAlunos++;
    }

    static function adicionarProfessores(){
        self::$totalDeProfessores++;
    }

    static function adicionarBibliotecarios(){
        self::$totalDeBibliotecarios++;
    }

    public function atribuirNota(Aluno $aluno, int $nota){
        $aluno->setNotas($nota);
    }

     public function atribuirFaltaAoAluno(Aluno $aluno, int $falta){
        $aluno->setFaltas($falta);
    }
}
?>

