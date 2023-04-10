<?php 
class Pedido {
    
    private $numero;
    private $descricao;
    private $quantidade;
    private $precoUnitario;
    
    public function __construct($numero, $descricao, $quantidade, $precoUnitario) {
        $this->numero = $numero;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
    }
    
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    
    public function getNumero() {
        return $this->numero;
    }
    
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    public function getDescricao() {
        return $this->descricao;
    }
    
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
    
    public function getQuantidade() {
        return $this->quantidade;
    }
    
    public function setPrecoUnitario($precoUnitario) {
        $this->precoUnitario = $precoUnitario;
    }
    
    public function getPrecoUnitario() {
        return $this->precoUnitario;
    }
    
    public function calcularValorFatura() {
        return $this->quantidade * $this->precoUnitario;
    }
}

$pedido1 = new Pedido(1, "Toner preto", 5, 50.00);

echo "\n      Faturamento\n";
echo "\nNúmero: " . $pedido1->getNumero() . "\n";
echo "Descrição: " . $pedido1->getDescricao() . "\n";
echo "Quantidade: " . $pedido1->getQuantidade() . "\n";
echo "Preço Unitário: R$ " . $pedido1->getPrecoUnitario() . "\n";
echo "Valor total: R$ " . $pedido1->calcularValorFatura() . "\n\n";
?>