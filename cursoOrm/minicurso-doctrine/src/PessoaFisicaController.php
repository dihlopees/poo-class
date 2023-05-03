<?php
use Doctrine\ORM\EntityManager;

class PessoaFisicaController {
    private EntityManager $entityManager;

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }

    public function create($nome, $cpf, $dataNascimento){
        $pessoaFisica = new PessoaFisica();
        $pessoaFisica
        ->setNome($nome)
        ->setCpf($cpf)
        ->setDataNascimento($dataNascimento);
    
    $this->entityManager->persist($pessoaFisica);
    $this->entityManager->flush();
    }
}

?>