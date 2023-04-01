<?php 
class ContaBancaria {
  private $saldo = 0;

  public function depositar($valor) {
      $this->saldo += $valor;
      echo "Depósito de R$ $valor realizado com sucesso! \n";
  }

  public function sacar($valor) {
      if ($valor <= $this->saldo) {
          $this->saldo -= $valor;
          echo "Saque de R$ $valor realizado com sucesso! \n";
      } else {
          echo "Saldo insuficiente para realizar o saque! \n";
      }
  }

  public function getSaldo() {
      echo "Seu saldo atual é de R$ " . $this->saldo . "\n\n";
  }

  public function sair() {
      echo "Obrigado por utilizar nossos serviços! \n\n";
      exit();
  }
}


$conta = new ContaBancaria();


while (true) {
  echo "Escolha uma opção: \n";
  echo "1 - Depositar \n";
  echo "2 - Sacar \n";
  echo "3 - Saldo \n";
  echo "4 - Sair \n";

  $opcao = readline();

  switch ($opcao) {
      case 1:
          echo "Digite o valor a ser depositado: \n";
          $valor = readline();
          $conta->depositar($valor);
          break;
      case 2:
          echo "Digite o valor a ser sacado: \n";
          $valor = readline();
          $conta->sacar($valor);
          break;
      case 3:
          $conta->getSaldo();
          break;
      case 4:
          $conta->sair();
          break;
      default:
          echo "Opção inválida! \n";
  }
}
?>