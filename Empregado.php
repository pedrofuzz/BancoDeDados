<?php
class Empregado {
    private $pnome;
    private $snome;
    private $tnome;
    private $salario;
    private $endereco;
    private $cpf;
    private $sexo;
    public function __construct() {
        
    }
    function getPnome() {
        return $this->pnome;
    }

    function getSnome() {
        return $this->snome;
    }

    function getTnome() {
        return $this->tnome;
    }

    function getSalario() {
        return $this->salario;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setPnome($pnome) {
        $this->pnome = $pnome;
    }

    function setSnome($snome) {
        $this->snome = $snome;
    }

    function setTnome($tnome) {
        $this->tnome = $tnome;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }


}
