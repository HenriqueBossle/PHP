<?php

// $nome = $_POST["nomeCompleto"];
// $idade = $_POST["idade"];
// $cpf = $_POST["cpf"];
// $senha = $_POST["senha"];


// echo "$nome $idade";


class ModeloAeronave{
    public int $id;

    public string $descricao;

    public int $capacidade;

    public function __construct(int $id, string $descricao, int $capacidade){
       $this->id = $id;
       $this->descricao = $descricao;
       $this->capacidade = $capacidade;

    }
}

$modeloAeronave = new ModeloAeronave(descricao: 'TecoTeco', capacidade: 200, id: 1);
echo "<pre>"; 
var_dump($modeloAeronave);

class Pista{
    public int $id;

    public string $codigo;

    public float $comprimento;

    public function __construct(int $id, string $codigo, float $comprimento){
       $this->id = $id;
       $this->codigo = $codigo;
       $this->comprimento = $comprimento;

    }
}

$pista = new Pista(2, "MKHJE", 2000);
echo "<pre>"; 
var_dump($pista);

class Clima{
    public int $id;

    public string $descricao;

    public function __construct(int $id, string $descricao){
       $this->id = $id;
       $this->descricao = $descricao;

    }
}

$clima = new Clima(3, ensolarado);
echo "<pre>"; 
var_dump($clima);

class Voo{
    public int $id;

    public string $direcao;

    public ModeloAeronave $modeloAeronave;

    public Pista $pista;

    public Clima $clima

    public float $horario

    public function __construct(int $id, string $descricao, ModeloAeronave $modeloAeronave, Pista $pista, Clima $clima, float $horario ){
       $this->id = $id;
       $this->direcao = $direcao;
       $this->modeloaronave = $modeloAeronave;
       $this->pista = $pista;
       $this->clima = $clima;
       $this->horario = $horario;

    }
}

$voo = new Voo(200, "Pouso" $modeloAeronave, $pista, $clima, 10);
echo "<pre>"; 
var_dump($voo);



