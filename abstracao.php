<?php

abstract class Banco
{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($valor)
    {
        if (isset($this->saldo)) {
            echo "O saldo já foi definido!";
        } else {
            $this->saldo = $valor;
            echo "Saldo Inicializado com Sucesso!\n";
        }
    }

    public function getLimiteSaque()
    {
        return $this->limiteSaque;
    }

    public function setLimiteSaque($valor)
    {
        if (isset($valor)) {
            $this->limiteSaque = $valor;
            echo "Novo limite de saque: R$ " . number_format($this->limiteSaque, 2) . "\n";
        } else {
            echo "Impossível definir o limite de saque sem um valor.\n";
        }
    }

    public function getJuros()
    {
        return $this->juros;
    }

    public function setJuros($taxa)
    {
        // Verificar se a taxa é maior ou igual a zero e menor que 100%
        if ($taxa < 0 || $taxa >= 1) {
            echo "Taxa inválida! Informe uma taxa entre 0 e 0.99.";
        } else {
            $this->juros = $taxa;
            echo "Taxa de juros atualizada para: " . $this->juros * 100 . "%\n";
        }
    }

    abstract protected function sacar($valor);
    abstract protected function depositar($deposito);
}

class Itau extends Banco
{

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        echo "<hr>Sacou $valor</hr>";
    }

    public function depositar($deposito)
    {
        $this->saldo += $deposito;
        echo "<hr>Depositou em conta do Itáu: $deposito</hr>\n";
    }
}

class Bradesco extends Banco
{

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        echo "<hr>Sacou $valor</hr>";
    }

    public function depositar($deposito)
    {
        $this->saldo += $deposito;
        echo "<hr>Depositou em conta do Bradesco: $deposito</hr>\n";
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "Saldo da conta do Itau: R$" . number_format($itau->getSaldo(), 2);
// Saque na conta do Itau
$itau->sacar(500);
echo "\nSaque realizado com sucesso!\nNovo saldo: R$" . number_format($itau->getSaldo(), 2);
$itau->depositar(3000);
echo "\nDepósito realizado com sucesso! Novo saldo: R$" . number_format($itau->getSaldo(), 2);
