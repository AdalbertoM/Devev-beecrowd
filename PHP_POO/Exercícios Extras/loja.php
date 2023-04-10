<?php 
class Funcionario {
    protected $nome;
    protected $rg;
    protected $salarioBase;

    public function __construct($nome, $rg, $salarioBase) {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->salarioBase = $salarioBase;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getRG() {
        return $this->rg;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function calcularSalario() {
        return $this->salarioBase;
    }
}

class Vendedor extends Funcionario {
    private $vendas;

    public function __construct($nome, $rg, $salarioBase) {
        parent::__construct($nome, $rg, $salarioBase);
        $this->vendas = 0;
    }

    public function acumularVendas($valor) {
        $this->vendas += $valor;
    }

    public function calcularSalario() {
        $salarioTotal = $this->salarioBase + ($this->vendas * 0.05);
        $this->vendas = 0;
        return $salarioTotal;
    }
}

class Administrativo extends Funcionario {
    private $horasExtras;

    public function __construct($nome, $rg, $salarioBase) {
        parent::__construct($nome, $rg, $salarioBase);
        $this->horasExtras = 0;
    }

    public function acumularHorasExtras($horas) {
        $this->horasExtras += $horas;
    }

    public function calcularSalario() {
        $salarioTotal = $this->salarioBase + ($this->horasExtras * $this->salarioBase * 0.01);
        $this->horasExtras = 0;
        return $salarioTotal;
    }
}

$vendedor = new Vendedor("\nJoão", "123456789", 2000.00);
$vendedor->acumularVendas(5000.00);
$vendedor->acumularVendas(3000.00);
$salarioVendedor = $vendedor->calcularSalario();
echo "\nO vendedor: " . $vendedor->getNome() . " tem salário base de R$ " . $vendedor->getSalarioBase() . " e realizou vendas no valor total de R$ " . ($vendedor->calcularSalario() - $vendedor->getSalarioBase()) . ". Seu salário total é R$ " . $salarioVendedor . ".";

$administrativo = new Administrativo("\nMaria", "987654321", 1800.00);
$administrativo->acumularHorasExtras(10);
$administrativo->acumularHorasExtras(5);
$salarioAdministrativo = $administrativo->calcularSalario();
echo "\n\nO funcionário administrativo: " . $administrativo->getNome() . " tem salário base de R$ " . $administrativo->getSalarioBase() . " e realizou " . $administrativo->calcularSalario() / $administrativo->getSalarioBase() . " horas extras. Seu salário total é R$ " . $salarioAdministrativo . ".\n\n";

?>