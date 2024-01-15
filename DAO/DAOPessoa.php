<?php

class DAOPessoa
{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_mvc";
    
        try {
            $this->conexao = new PDO($dsn, 'root', null);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    

    public function insert(ModelPessoa $model)
    {

        $sql = "INSERT INTO `pessoa`(`nome`, `cpf`, `data_nascimento`) VALUES (?, ?, ?)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->execute();

        header("Location: View/Modules/Pessoa/ListaPessoa.php");



    }

    public function update(ModelPessoa $model) 
    {

        $sql = "UPDATE `pessoa` SET nome = ?, cpf= ?, data_nascimento = ? where id = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();


    }

    public function select()
    {
        $sql = "SELECT `id`, `nome`, `cpf`, `data_nascimento` FROM `pessoa`";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }


    public function delete(int $id)
    {
        $sql = "DELETE FROM `pessoa` WHERE id = ? ";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

    }

    
    public function SelectByID(int $id)
    {

        include_once 'Model/ModelPessoa.php';
        
        $sql = "SELECT * FROM `pessoa` WHERE `id` = ?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ModelPessoa");
    }


    



}

?>