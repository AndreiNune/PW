<?php

  include_once 'Conectar.php';

class Produto
{
    private $id;
    private $nome;
    private $estoque;
    private $conn;

    // getters and setters

    public function getId() 
    {
        return $this->id;
    }
    
    public function setId($iid)
    {
        $this->id = $iid;
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function setNome($name) 
    {
       $this->nome = $name;
    }

    public function getEstoque() 
    {
        return $this->estoque;
    }

    public function setEstoque($estoqui) 
    {
       $this->estoque = $estoqui;
    }
    
function listar()
{
    try 
    {
        $this-> conn = new Conectar();
        $sql = $this->conn->prepare("select * from produtos order by nome");
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
        $sql = $this->conn->prepare("insert into produtos values (null,?,?)");
        @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
        @$sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
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
        $sql = $this->conn->prepare("delete from produtos where  id = ?");
        @$sql->bindParam(1, $this->getId(), PDO::PARAM_STR);
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
        $sql = $this->conn->prepare("select * from produtos where id like ?");
        @$sql->bindParam(1, $this->getId(), PDO::PARAM_STR);
        $sql->execute();
        return $sql->fetchAll(); 
        $this->conn =  null;
    } catch (PDOException $exc) {
        echo "Erro ao executar a pesquisa. " . $exc->getMessage();
    }
}

}  // Fim classe Produto

?>

