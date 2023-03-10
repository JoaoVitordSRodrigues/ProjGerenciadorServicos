<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap w/ Vite</title>

        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'   
        ])
        
        <style>
            body{
                background-color:#d1d1d1;
            }

            .navbar-brand,.nav-link   {
                color:white;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Consultar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="card mb-3 col-12">
                        <div class="card-body">
                            <h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
                            <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
                            <p>
                                <form method="post" action="controller/ControllerCadastro.php" id="form" name="form">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1">Nome:</label>
                                        <input type="text" class="form-control" name="txtNome" required id="txtNome">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1">Telefone:</label>
                                        <input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1">Origem:</label>
                                        <select class="form-control" required name="txtOrigem" id="txtOrigem">
                                            <option>Celular</option>
                                            <option>Fixo</option>
                                            <option>Whatsapp</option>
                                            <option>Facebook</option>
                                            <option>Instagram</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1">Data do Contato:</label>
                                        <input type="date" class="form-control" required name="txtDataContato" id="txtDataContato">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1">Observação</label>
                                        <textarea class="form-control" name="txtObservacao" id="txtObservacao" rows="3"></textarea>
                                    </div>
                                    <button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
