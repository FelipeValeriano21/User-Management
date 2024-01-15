<?php 

class ControllerPessoa
{

    public static function index()
    {

        include 'Model/ModelPessoa.php';

        $model = new ModelPessoa();

        $model->getallrows();

        include 'View/Modules/Pessoa/ListaPessoa.php';
    }

    public static function form()
    {
        include 'Model/ModelPessoa.php';

        $model = new ModelPessoa();

        if(isset($_GET['id'])){

            $model = $model->getByID((int) $_GET['id']);

        }


        // var_dump($model);

        include 'View/Modules/Pessoa/FormPessoa.php';

    }

    public static function save()
    {
        include 'Model/ModelPessoa.php';

        $model = new ModelPessoa();

        $model ->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model->save();

        header("Location: /pessoa");

    }

    public static function delete()
    {

        include 'Model/ModelPessoa.php';

        $model = new ModelPessoa();
        $model->id = $_POST['id'];
        $model->delete($model->id);

        header("Location: /pessoa");


    }


 

}


?>