<?php 
class Carro {
    private $marca;
    private $modelo;
    private $ano;
    private $velocidadeAtual;

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getVelocidadeAtual() {
        return $this->velocidadeAtual;
    }

    public function acelerar($aceleracao) {
        $this->velocidadeAtual += $aceleracao;
    }
}

$carro = new Carro();

$marca = readline("Digite a marca do carro: ");
$carro->setMarca($marca);

$modelo = readline("Digite o modelo do carro: ");
$carro->setModelo($modelo);

$ano = readline("Digite o ano do carro: ");
$carro->setAno($ano);

$aceleracao = readline("Digite a aceleracao desejada: ");
$carro->acelerar($aceleracao);

echo "Velocidade atual: " . $carro->getVelocidadeAtual() . " km/h";
?>