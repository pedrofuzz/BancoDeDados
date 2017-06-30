<?php
$pnome = $_POST['primeiroNome'];
$snome = $_POST['segundoNome'];
$tnome = $_POST['terceiroNome'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$salario = $_POST['salario'];
$endereco = $_POST['endereco'];
include 'Empregado.php';

//Instanciação do objeto empregado
$empregado = new Empregado();
//Set valores para o objeto empregado
$empregado->setPnome($pnome);
$empregado->setSnome($snome);
$empregado->setTnome($tnome);
$empregado->setEndereco($endereco);
$empregado->setSalario($salario);
$empregado->setSexo($sexo);
$empregado->setCpf($cpf);

//mostra o objeto instanciado.
//print_r($empregado);

//conectando com o banco de dados.
include 'ConexaoDB.php';
$conexao = new ConexaoDB();
$conexao->salvaEmpregado($empregado);

