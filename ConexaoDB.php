<?php

class ConexaoDB {
    private $conn;
    
    public function __construct() {
        try{
            $this->conn = 
              new PDO("mysql:host=localhost;dbname=dbempresa", "root", ""); 
        }
        catch (PDOException $e){
            print("Não foi possível conectar com o banco de dados");
        }
    }
    public function salvaEmpregado(Empregado $empregado){
        $query = 
   $this->conn->prepare("INSERT INTO Empregado "
   . "(primeiro_nome,segundo_nome,terceiro_nome,cpf,sexo,endereco,idade,data_nasc,salario) "
   . "VALUES (:pnome, :snome,:tnome,:cpf,:sexo,:endereco,:idade,:data_nasc,:salario)");
        $pnome = $empregado->getPnome();
        $snome = $empregado->getSnome();
        $tnome = $empregado->getTnome();
        $cpf = $empregado->getCpf();
        $sexo = $empregado->getSexo();
        $salario = $empregado->getSalario();
        $endereco = $empregado->getEndereco();
        $query->bindParam(":pnome",$pnome);
        $query->bindParam(":snome",$snome);
        $query->bindParam(":tnome",$tnome);
        $query->bindParam(":cpf",$cpf);
        $query->bindParam(":sexo",$sexo);
        $query->bindParam(":endereco",$endereco);
        $query->bindParam(":idade",$idade);
        $query->bindParam(":data_nasc",$data_nasc);
        $query->bindParam(":salario",$salario);
        
        $idade = 12;
        $data_nasc = "1994-12-29";
        
        $query->execute();
    }
}