<?php

class Aluno
{
    private $nome;
    private $turma;
    private $idade;
    private $notaGeral;
    private $matricula;

    //Construtor da classe
    public function __construct($nome, $turma, $idade, $matricula)
    {
        $this->nome = $nome;
        $this->turma = $turma;
        $this->idade = $idade;
        $this->matricula = $matricula;
    }

    public function atribuirNota($n1, $n2, $n3)
    {
        $notas = array();
        array_push($notas, $n1, $n2, $n3);
        $this->notaGeral = array_sum($notas);
    }

    public function getTurma()
    {
        return $this->turma;
    }

    public function getNotaGeral()
    {
        return $this->notaGeral;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }
}
?>