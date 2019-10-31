<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- abas -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="dadosNoivos.php">Dados dos noivos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="detalhesDoSite.php">Detalhes do site</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="listaPresentes.php">Lista de presentes recebidos</a>
        </li>
    </ul>

    <!-- Número de visitas, mensagens e presentes -->
    <div class="card mt-3">
        <div class="card-body">
            <h4>Número de visitas:</h4>
            <p>100</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>Últimas 3 mensagens recebidas:</h4>

            <div class="container-fluid">
                <div class="row">
                    <div class="card bg-light m-3" style="max-width: 18rem;">
                        <div class="card-header">Data:</div>
                        <div class="card-body">
                            <h5 class="card-title">De: Fulana</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, quidem beatae ea voluptatibus suscipit excepturi cum quia, fugiat optio, consequatur voluptas obcaecati sit doloribus temporibus.</p>
                        </div>
                        <button type="button" class="btn btn-outline-primary rounded-pill w-50 m-3">Responder</button> 
                    </div>

                    <div class="card bg-light m-3" style="max-width: 18rem;">
                        <div class="card-header">Data:</div>
                        <div class="card-body">
                            <h5 class="card-title">De: Fulana</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, quidem beatae ea voluptatibus suscipit excepturi cum quia, fugiat optio, consequatur voluptas obcaecati sit doloribus temporibus.</p>
                        </div>
                        <button type="button" class="btn btn-outline-primary rounded-pill w-50 m-3">Responder</button> 
                    </div>
                    
                    <div class="card bg-light m-3" style="max-width: 18rem;">
                        <div class="card-header">Data:</div>
                        <div class="card-body">
                            <h5 class="card-title">De: Fulana</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, quidem beatae ea voluptatibus suscipit excepturi cum quia, fugiat optio, consequatur voluptas obcaecati sit doloribus temporibus.</p>
                        </div>
                        <button type="button" class="btn btn-outline-primary rounded-pill w-50 m-3">Responder</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>Número de presentes recebidos</h4>
            <p>100</p>
        </div>
    </div>
</body>
</html>