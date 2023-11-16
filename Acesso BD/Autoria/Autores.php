<?php

include_once 'Conectar.php';

// Início classe Autor

class Autor
{
    private $Cod_autor;
    private $NomeAutor;
    private $Sobrenome;
    private $Email;
    private $Nasc;
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

    public function getNomeAutor()
    {
        return $this->NomeAutor;
    }

    public function setNomeAutor($AutorName)
    {
        $this->NomeAutor = $AutorName;
    }

    public function getSobrenome()
    {
        return $this->Sobrenome;
    }

    public function setSobrenome($Sobrenomee)
    {
        $this->Sobrenome = $Sobrenomee;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Emaill)
    {
        $this->Email = $Emaill;
    }

    public function getNasc()
    {
        return $this->Nasc;
    }

    public function setNasc($Nascc)
    {
        $this->Nasc = $Nascc;
    }

    function listar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from autor order by NomeAutor");
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
            $sql = $this->conn->prepare("insert into autor values (?,?,?,?,?)");
            @$sql->bindParam(1, $this->getCod_autor(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getNomeAutor(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getSobrenome(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getEmail(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getNasc(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("delete from autor where Cod_autor = ?");
            @$sql->bindParam(1, $this->getCod_autor(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("select * from autor where NomeAutor like ?");
            @$sql->bindParam(1, $this->getNomeAutor(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao executar a pesquisa. " . $exc->getMessage();
        }
    }

}  // Fim classe Autor

?>