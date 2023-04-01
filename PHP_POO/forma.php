<?php

interface FormaGeometrica {
  public function calcularArea();
  public function calcularPerimetro();
}

class Retangulo implements FormaGeometrica {
  private $base;
  private $altura;

  public function __construct() {
    echo "Insira a base do retângulo: ";
    $this->base = floatval(fgets(STDIN));
    echo "Insira a altura do retângulo: ";
    $this->altura = floatval(fgets(STDIN));
  }

  public function calcularArea() {
    return $this->base * $this->altura;
  }

  public function calcularPerimetro() {
    return 2 * ($this->base + $this->altura);
  }
}

class Circulo implements FormaGeometrica {
  private $raio;

  public function __construct() {
    echo "Insira o raio do círculo: ";
    $this->raio = floatval(fgets(STDIN));
  }

  public function calcularArea() {
    return pi() * pow($this->raio, 2);
  }

  public function calcularPerimetro() {
    return 2 * pi() * $this->raio;
  }
}

$retangulo = new Retangulo(); // Cria um objeto da classe Retangulo
echo "Área do retângulo: " . $retangulo->calcularArea() . "\n"; // Chama o método calcularArea() da classe Retangulo e exibe o resultado
echo "Perímetro do retângulo: " . $retangulo->calcularPerimetro() . "\n"; // Chama o método calcularPerimetro() da classe Retangulo e exibe o resultado


$circulo = new Circulo(); // Cria um objeto da classe Circulo
echo "Área do círculo: " . $circulo->calcularArea() . "\n"; // Chama o método calcularArea() da classe Circulo e exibe o resultado
echo "Perímetro do círculo: " . $circulo->calcularPerimetro() . "\n"; // Chama o método calcularPerimetro() da classe Circulo e exibe o resultado

?>
