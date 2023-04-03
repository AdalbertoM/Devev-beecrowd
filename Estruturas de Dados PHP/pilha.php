<?php 
class Pilha {
    private $itens;
  
    public function __construct() {
      $this->itens = array();
    }
  
    public function empilhar($valor) {
      array_push($this->itens, $valor);
    }
  
    public function desempilhar() {
      if ($this->estaVazia()) {
        return null;
      } else {
        return array_pop($this->itens);
      }
    }
  
    public function topo() {
      return end($this->itens);
    }
  
    public function estaVazia() {
      return empty($this->itens);
    }
  }
?>
