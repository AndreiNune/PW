<?php

  include_once 'Conectar.php';

  // Início classe Autoria

class Autoria
{
    private $Cod_autor;
    private $Cod_livro;
    private $DataLancamento;
    private $Editora;
    private $conn;

    // getters and setters

    public function getCod_autor() 
    {
        return $this->Cod_autor;
    }
    
    public function setCod_autor($Cod_autorr)
    {
        $this->Cod_autor = $Cod_autorr;
    }

    public function getCod_livro() 
    {
        return $this->Cod_livro;
    }

    public function setCod_livro($Cod_livroo) 
    {
       $this->Cod_livro = $Cod_livroo;
    }

    public function getDataLancamento() 
    {
        return $this->DataLancamento;
    }

    public function setDataLancamento($DataLancamentoo) 
    {
       $this->DataLancamento = $DataLancamentoo;
    }

    public function getEditora() 
    {
        return $this->Editora;
    }

    public function setEditora($Editoraa) 
    {
       $this->Editora = $Editoraa;
    }
    
function listar()
{
    try 
    {
        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("select * from autoria order by Cod_autor");
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    } 
    catch(PDOException $exc) 
    {
        echo "Erro ao executar consulta. " . $exc->getMessage(); 
    }
}

function salvar()
{
    try {
        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("insert into autoria values (?,?,?,?)");
        @$sql-> bindParam(1, $this->getCod_autor(), PDO::PARAM_STR);
        @$sql-> bindParam(2, $this->getCod_livro(), PDO::PARAM_STR);
        @$sql-> bindParam(3, $this->getDataLancamento(), PDO::PARAM_STR);
        @$sql-> bindParam(4, $this->getEditora(), PDO::PARAM_STR);
        if ($sql->execute() == 1) 
        {
            return "Registro salvo!";
        }
        $this->conn = null;
    } catch (PDOException  $exc) {
        echo "Erro ao salvar o registro. " . $exc->getMessage();
    }
}

function excluir()
{
    try {
        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("delete from autoria where Cod_autor = ? and Cod_Livro = ?");
        @$sql->bindParam(1, $this->getCod_autor(), PDO::PARAM_STR);
        @$sql->bindParam(2, $this->getCod_livro(), PDO::PARAM_STR);
        if($sql->execute() == 1)
        {
            return "Excluido com sucesso!";
        }
        else 
        {
            return "Erro na exclusão";
        }
        $this->conn =  null;
    } catch (PDOException $exc) {
        echo "Erro ao excluir. " . $exc->getMessage();
    }
}

function pesquisar()
{
    try {
        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("select * from autoria where Editora like ?");
        @$sql->bindParam(1, $this->getEditora(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll(); 
        $this->conn =  null;
    } catch (PDOException $exc) {
        echo "Erro ao executar a pesquisa. " . $exc->getMessage();
    }
}

function alterar(){
    try{

        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("select * from autoria where Cod_autor = ?");
        @$sql-> bindParam(1, $this->getCod_autor(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll();
        $this->conn = null;
    }catch (PDOException $exc){
        echo "Erro ao alterar " . $exc->getMessage();
    }
}

function alterar2(){
    try{

        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("update autoria set Cod_livro = ?, DataLancamento = ?, Editora = ? where Cod_autor = ?");
        @$sql-> bindParam(1, $this->getCod_livro(), PDO::PARAM_STR);
        @$sql-> bindParam(2, $this->getDataLancamento(), PDO::PARAM_STR);
        @$sql-> bindParam(3, $this->getEditora(), PDO::PARAM_STR);
        @$sql-> bindParam(3, $this->getCod_autor(), PDO::PARAM_STR);
        if ($sql->execute() == 1) {
            return "Registro alterado com sucesso!";
        }
        $this->conn = null;

    }catch (PDOException $exc){

        echo "Erro ao salvar o registro. " . $exc->getMessage();

    }
}

}  // Fim classe Autoria

?>