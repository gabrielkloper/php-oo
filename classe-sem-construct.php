<?php
// Classe com atributos private usando gets and setters
// Caso os atributos fossem publicos não precisaria usar
class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    public function getNome() {
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getSexo(){
        return $this->sexo;
    }


    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function Falar(){
        echo "Olá, meu nome é " . $this->nome . "";
    }
}

$lucas = new Pessoa();
$lucas->setNome("Lucas");
$lucas->setIdade(20);
$lucas->setSexo("Masculino");

// var_dump($gabriel);

$lucas->Falar();