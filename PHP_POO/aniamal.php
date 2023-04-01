<?php
abstract class Animal {
  abstract public function emitirSom();
}

class Cachorro extends Animal {
  public function emitirSom() {
    echo "Au Au Au!\n";
  }
}

class Gato extends Animal {
  public function emitirSom() {
    echo "Miau Miau Miau!\n";
  }
}

$animal = null;
$opcao = readline("Digite 1 para Cachorro ou 2 para Gato: ");
if ($opcao == 1) {
  $animal = new Cachorro();
} else if ($opcao == 2) {
  $animal = new Gato();
}
if ($animal != null) {
  $animal->emitirSom();
} else {
  echo "Opção inválida.\n";
}
?>
