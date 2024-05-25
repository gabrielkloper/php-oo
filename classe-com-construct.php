<?php
class Pessoa {
    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }


    

    public function Falar(){
        echo "Olá, meu nome é " . $this->nome . "";
    }
}

//com function Construct
$gabriel = new Pessoa("Gabriel", 29, "Masculino");
$gabriel->Falar();
echo "<br> ";


// var_dump($gabriel);
// var_dump($lucas);
