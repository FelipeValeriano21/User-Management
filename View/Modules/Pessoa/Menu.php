

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            margin: 25px;
            align-items: center;
            flex-direction: column;
            display: flex;
        }
    </style>
</head>
<body>
    <header>
        <h2>Sistema de Cadastramento</h2>
    </header>
    <main>
        <div class="container text-center mt-5">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">Novo Usuario</h5>
                     <a href="/pessoa/form" class="btn btn-primary mt-2">    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                        </svg>
                    </a>
                    </div>
                </div>
            </div>
         
                <div class="col">
                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title ">Usuarios Já existentes</h5>          
                     <a href="/pessoa" class="btn btn-primary mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 2h-4v3h4zm0 4h-4v3h4zm0 4h-4v3h3a1 1 0 0 0 1-1zm-5 3v-3H6v3zm-5 0v-3H1v2a1 1 0 0 0 1 1zm-4-4h4V8H1zm0-4h4V4H1zm5-3v3h4V4zm4 4H6v3h4z"/>
                        </svg>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="mt-5">
        <p>Feito por <b>Felipe Reis</b></p>
    </footer>
</body>
</html>