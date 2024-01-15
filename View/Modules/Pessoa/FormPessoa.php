<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <header class="text-center mt-5">
      <h2>Usuario</h2>
    </header>
        
    <div class="container  col-5 mt-4">
        <form class="mx-auto" method="post" action="/pessoa/form/save">
        <div class="mb-3">
                <input  class="form-control " id="id" name="id" value="<?= $model->id ?>" type="hidden">   
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-left">Nome</label>
                <input  class="form-control " id="nome" name="nome" value="<?= $model->nome ?>" type="text">   
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">CPF</label>
                <input type="number" class="form-control" id="cpf" name="cpf" value="<?= $model->cpf ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" value="<?= $model->data_nascimento ?>">
            </div>
            <div class="container text-center mt-4">
              <div class="row">
                <div class="col">
                  <button type="submit" class="btn btn-success">Processar
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16">
                      <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"/>
                      <path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"/>
                    </svg>
                  </button> </form>  
                </div>
                <div class="col">
                  <a href="/pessoa" class="btn btn-primary">LISTA DE PESSOAS</a>
                </div>
              </div>
            </div>
       
       

        <form action=""></form>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>