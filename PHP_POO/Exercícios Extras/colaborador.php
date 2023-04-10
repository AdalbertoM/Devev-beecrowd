<?php 
class Colaborador {
    private $primeiroNome;
    private $sobrenome;
    private $salarioMensal;

    public function __construct($primeiroNome, $sobrenome, $salarioMensal) {
        $this->primeiroNome = $primeiroNome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }

    public function getPrimeiroNome() {
        return $this->primeiroNome;
    }

    public function setPrimeiroNome($primeiroNome) {
        $this->primeiroNome = $primeiroNome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }

    public function calcularSalarioAnual() {
        return $this->salarioMensal * 12;
    }

    public function oferecerAumento($percentual) {
        $this->salarioMensal *= (1 + $percentual / 100);
    }
}

$colaborador = new Colaborador("\nJoão", "Silva", 2000);
echo $colaborador->getPrimeiroNome() . " " . $colaborador->getSobrenome() . " recebe R$ " . $colaborador->getSalarioMensal() . " por mês." . PHP_EOL;
echo "O salário anual de " . $colaborador->getPrimeiroNome() . " é R$ " . $colaborador->calcularSalarioAnual() . "." . PHP_EOL;
$colaborador->oferecerAumento(10);
echo "Depois de um aumento de 10%, o novo salário mensal de " . $colaborador->getPrimeiroNome() . " é R$ " . $colaborador->getSalarioMensal() . ".\n" . PHP_EOL;

?>