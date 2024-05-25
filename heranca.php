<?php

//Herança

class Veiculo {
    protected $modelo;
    protected $cor;
    protected $ano;


    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getCor(){
        return $this->cor;
    }

    public function getAno(){
        return $this->ano;
    }


    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }
}


class Carro extends Veiculo {
    public function ligarLimpador(){
        echo "limpando 321";
    }
}

class Moto extends Veiculo {
    public function Empinar(){
        echo "empinando!!!";
    }
}

$gol = new Carro();
$gol->setModelo("GOL");
$gol->setCor("Vermelho");
$gol->setAno(2018);
$gol->Andar();
echo "<br>";
$gol->ligarLimpador();
echo "<br>";
var_dump($gol);
echo "<br>";


$moto = new Moto();
$moto->setModelo("Harley");
$moto->setCor("preta");
$moto->setAno(2023);
$moto->Parar();
echo "<br>";
$moto->empinar();
echo "<br>";
var_dump($moto);