<?php 
class Pessoa {
    public $nome;
    public $idade;
    public $sexo;
    public $cidade;
    public function __construct($nome, $idade, $sexo, $cidade) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->cidade = $cidade;
        
    }
}

class Funcionario extends Pessoa {
    public $setor;
    public $salario;
    public function __construct($nome, $idade, $sexo, $cidade, $setor, $salario) {
        parent::__construct($nome, $idade, $sexo, $cidade);
        $this->setor = $setor;
        $this->salario = $salario;
    }
}

//Instanciamento do objeto da classe Funcionario e atribuição dos valores as propriedades

echo "Digite o nome do funcionário: ";
$nome = readline();
echo "Digite a idade do funcionário: ";
$idade = readline();
echo "Digite o sexo do funcionário: ";
$sexo = readline();
echo "Digite a cidade do funcionário: ";
$cidade = readline();
echo "Digite o setor do funcionário: ";
$setor = readline();
echo "Digite o salário do funcionário: ";
$salario = readline();

$funcionario = new Funcionario($nome, $idade, $sexo, $cidade, $setor, $salario);

echo "\nO funcionário ".$funcionario->nome."d a cidade ".$funcionario->cidade." tem ".$funcionario->idade." anos, "." está no setor ".$funcionario->setor." e ganha R$".$funcionario->salario." por mês.\n";

?>