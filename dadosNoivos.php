<?php

    function cadastroNoivos($nome1, $nome2, $telefone, $localEvento, $dataEvento) {

        $arquivoJson = "cadastro.json";

        if(file_exists($arquivoJson)) {

            $conteudoJson = file_get_contents($arquivoJson); 
            $informacoesCadastradas = json_decode($conteudoJson, true); 

            $informacoesCadastradas[] = [
                "nome1"=> $nome1,
                "nome2"=> $nome2,
                "telefone"=> $telefone,
                "localEvento"=> $localEvento,
                "dataEvento"=> $dataEvento
            ];
            

        } else {

            $informacoesCadastradas = [];
            $informacoesCadastradas[] = [
                "nome1"=> $nome1,
                "nome2"=> $nome2,
                "telefone"=> $telefone,
                "localEvento"=> $localEvento
            ];
        }

            $arrayEmJson = json_encode($informacoesCadastradas);
            $jsonCarregado = file_put_contents($arquivoJson, $arrayEmJson);

    };

    if($_POST) {
        echo cadastroNoivos($_POST["nome1"], $_POST["nome2"], $_POST["telefone"], $_POST["localEvento"], $_POST["dataEvento"]);
    };

    $arquivoJson = "cadastro.json";
    $informacoesCadastradas = json_decode(file_get_contents($arquivoJson), true);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Noivos</title>
</head>
<body>
    <!-- abas -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="dadosNoivos.php">Dados dos noivos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="detalhesDoSite.php">Detalhes do site</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="listaPresentes.php">Lista de presentes recebidos</a>
        </li>
    </ul>

    
    <div class="container">
        <div class="row">
        <!-- tabela com os dados -->
            <div class="col-lg-6">
                <div class="card m-5">
                    <div class="card-header">
                        <?php foreach($informacoesCadastradas as $informacao) : ?>
                        <h4> <?php echo $informacao["nome1"]." e ".$informacao["nome2"] ?> </h4>
                        <?php endforeach ?>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h5>Telefone</h5>
                            <p> <?php echo $informacao["telefone"] ?> </p>
                        </li>
                        <li class="list-group-item">
                            <h5>Local do evento</h5>
                            <p> <?php echo $informacao["localEvento"] ?> </p>
                        </li>
                        <li class="list-group-item">
                            <h5>Data do evento</h5>
                            <p> <?php echo $informacao["dataEvento"] ?> </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- formulário -->
            <div class="col-lg-6">
                <form class="p-5" method="post">
                    <h4>Cadastrar noivos</h4>

                    <div class="form-group">
                        <label class="font-weight-bold" for="nome1">Nome noivo(a)</label>
                        <input type="text" name="nome1" class="form-control" placeholder="Nome do noivo(a)">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="nome2">Nome noivo(a)</label>
                        <input type="text" name="nome2" class="form-control" placeholder="Nome do noivo(a)">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="telefone">Telefone</label>
                        <input type="number" name="telefone" class="form-control" placeholder="000 00000-0000">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="locaEvento">Local do evento</label>
                        <input type="text" name="localEvento" class="form-control" placeholder="Digite o endereço">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="locaEvento">Data do evento</label>
                        <input type="text" name="dataEvento" class="form-control" placeholder="00/00/0000">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>