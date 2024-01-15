<?php

class ModelPessoa{

    public $id, $nome, $cpf, $data_nascimento;

    public $rows;

    public function save()
    {

        include 'DAO/DAOPessoa.php';

        $dao = new DAOPessoa();

        if(empty($this->id)){

             $dao->insert($this);

        }else{
            
            $dao->update($this);

        }

       


    }

    public function getallrows()
    {
        include 'DAO/DAOPessoa.php';

        $dao = new DAOPessoa();
        
        $this->rows = $dao->select();


    }

    public function delete($id)
    {

        include 'DAO/DAOPessoa.php';

        $dao = new DAOPessoa();
        
        $this->rows = $dao->delete($id);

    }

    public function getByID(int $id)
    {
        include 'DAO/DAOPessoa.php';

        $dao = new DAOPessoa();

        $obj = $dao->SelectByID($id);     

       return ($obj) ? $obj : new ModelPessoa();

        //OPERADOR TERNARIO 

    }

    public function update ($id)
    {
        include 'DAO/DAOPessoa.php';

        $dao = new DAOPessoa();

        $dao->update($id);

    }


}


?>