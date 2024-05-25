<?php
    
    class Animal {
        public function Andar(){
            echo "Eu estou andando<br>";
        }
    }

    class Cavalo extends Animal {
        public function Andar(){
            echo "Eu estou galopando<br>";
            
        }
    }

$animal = new Cavalo();
$animal->Andar();