<?php

    function cadastroPresentes($convidado, $item, $valor, $status) {

        $arquivoJson = "presentes.json";

        if(file_exists($arquivoJson)) {

            $conteudoJson = file_get_contents($arquivoJson); 
            $informacoesCadastradas = json_decode($conteudoJson, true);

            if($informacoesCadastradas==[]){
                $informacoesCadastradas[] = [
                    "id"=> 1,
                    "convidado"=> $convidado,
                    "item"=> $item,
                    "valor"=> $valor,
                    "status"=> $status
                ];

            } else {
                $ultimoId = end($informacoesCadastradas);
                $incrementandoId = $ultimoId["id"] + 1;

                $informacoesCadastradas[] = [
                    "id"=> $incrementandoId,
                    "convidado"=> $convidado,
                    "item"=> $item,
                    "valor"=> $valor,
                    "status"=> $status
                ];
            }

            $arrayEmJson = json_encode($informacoesCadastradas);
            $jsonCarregado = file_put_contents($arquivoJson, $arrayEmJson);

        } else {

            $informacoesCadastradas = [];
            $informacoesCadastradas[] = [
                "id"=> 1,
                "convidado"=> $convidado,
                "item"=> $item,
                "valor"=> $valor,
                "status"=> $status
            ];

            $arrayEmJson = json_encode($informacoesCadastradas);
            $jsonCarregado = file_put_contents($arquivoJson, $arrayEmJson);

        }
        
    };

    if($_POST) {
        echo cadastroPresentes($_POST["convidado"], $_POST["item"], $_POST["valor"], $_POST["status"]);
    };

    $arquivoJson = "presentes.json";
    $informacoesCadastradas = json_decode(file_get_contents($arquivoJson), true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lista de Presentes</title>
</head>
<body>
    <!-- abas -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="dadosNoivos.php">Dados dos noivos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="detalhesDoSite.php">Detalhes do site</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="listaPresentes.php">Lista de presentes recebidos</a>
        </li>
    </ul>

    <!-- tabela de presentes -->
    <div class="container">
        <div class="row">
            <!-- tabela com os dados -->
            <div class="col-lg-6 mt-5">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Convidado</th>
                            <th scope="col">Item</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($informacoesCadastradas as $informacao) : ?>
                        <tr>
                            <td scope="row"> <?php echo $informacao["id"] ?> </th>
                            <td> <?php echo $informacao["convidado"] ?> </td>
                            <td> <?php echo $informacao["item"] ?> </td>
                            <td> R$ <?php echo $informacao["valor"] ?> </td>
                            <td> <?php echo $informacao["status"] ?> </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    
                </table>
            </div>
        
            <!-- formulário -->
            <div class="col-lg-6">
                <form class="p-5" action="listaPresentes.php" method="post">
                    <h4>Cadastrar presentes</h4>

                    <div class="form-group">
                        <label class="font-weight-bold" for="convidado">Nome do convidado(a)</label>
                        <input type="text" name="convidado" class="form-control" placeholder="Nome do convidado(a)">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="item">Item</label>
                        <input type="text" name="item" class="form-control" placeholder="Item comprado">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="valor">Valor</label>
                        <input type="number" name="valor" class="form-control" placeholder="Digite o valor">
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="status">Status</label>
                        <input type="text" name="status" class="form-control" placeholder="Status da compra">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>   
    </div>     
</body>
</html>