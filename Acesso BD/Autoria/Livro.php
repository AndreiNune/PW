<?php

include_once 'Conectar.php';

// Início classe Livro

class Livro
{
    private $Cod_livro;
    private $Título;
    private $Categoria;
    private $ISBN;
    private $Idioma;
    private $Qtdepag;
    private $conn;

    // getters and setters

    public function getCod_livro()
    {
        return $this->Cod_livro;
    }

    public function setCod_livro($Cod_Livroo)
    {
        $this->Cod_livro = $Cod_Livroo;
    }

    public function getTítulo()
    {
        return $this->Título;
    }

    public function setTítulo($Títuloo)
    {
        $this->Título = $Títuloo;
    }

    public function getCategoria()
    {
        return $this->Categoria;
    }

    public function setCategoria($Categoriaa)
    {
        $this->Categoria = $Categoriaa;
    }

    public function getISBN()
    {
        return $this->ISBN;
    }

    public function setISBN($ISBNN)
    {
        $this->ISBN = $ISBNN;
    }

    public function getIdioma()
    {
        return $this->Idioma;
    }

    public function setIdioma($Idiomaa)
    {
        $this->Idioma = $Idiomaa;
    }

    public function getQtdepag()
    {
        return $this->Qtdepag;
    }

    public function setQtdepag($Qtdepagg)
    {
        $this->Qtdepag = $Qtdepagg;
    }

    function listar()
    {
        try {
            $this->conn = new Conectar();
            @$sql = $this->conn->prepare("select * from livro order by Cod__Livro");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }

    function salvar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into livro values (?,?,?,?,?,?)");
            @$sql->bindParam(1, $this->getCod_Livro(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getTítulo(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getCategoria(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getISBN(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getIdioma(), PDO::PARAM_STR);
            @$sql->bindParam(6, $this->getQtdepag(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
                return "Registro salvo!";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function excluir()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from livro where Cod__Livro = ?");
            @$sql->bindParam(1, $this->getCod_livro(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
                return "Excluido com sucesso!";
            } else {
                return "Erro na exclusão";
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao excluir. " . $exc->getMessage();
        }
    }

    function pesquisar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from livro where Título like ?");
            @$sql->bindParam(1, $this->getTítulo(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao executar a pesquisa. " . $exc->getMessage();
        }
    }

}  // Fim classe Livro

?>