<?php 
class Pessoa{
   public $nome;
   public $sobrenome;
   public $idade;
   public $sexo;
   public $cidade;

   public function setNome($nome) {
    $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getCidade() {
        return $this->cidade;
    }
}

$pessoa = new Pessoa();
$pessoa->setNome("Adalberto");
$pessoa->setSobrenome("Marques");
$pessoa->setIdade(34);
$pessoa->setSexo("Masculino");
$pessoa->setCidade("Chapeco");

echo "Nome: " . $pessoa->getNome() . "\n";
echo "Sobrenome: " . $pessoa->getSobrenome() . "\n";
echo "Idade: " . $pessoa->getIdade() . "\n";
echo "Sexo: " . $pessoa->getSexo() . "\n";
echo "Cidade: " . $pessoa->getCidade() . "\n";
?>