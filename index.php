<?php
if (isset($_POST['submit'])) {
    include_once('config.php');
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $result = mysqli_query(
        $conexao,
        "INSERT INTO resultados(cep,endereco,numero,bairro,cidade,estado) 
        VALUES('$cep','$endereco','$numero','$bairro','$cidade','$estado')"
    );
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="./js/jquery.min.js" defer></script>
    <script src="./js/main.js" type='module' defer></script>
    <script src="./js/bootstrap.js" defer></script>
    <title>Consulta de Endereços</title>
</head>

<body>
    <header class="topo">
        <h1 class="title">Consulta de Endereços</h1>
    </header>
    <section class="container">
        <form action="index.php" method="POST">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="inputbox">
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" required>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="inputbox">
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco" name="endereco" required>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="inputbox">
                        <label for="numero">Número</label>
                        <input type="text" id="numero" name="numero" required>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="inputbox">
                        <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro" required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="inputbox">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" required>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="inputbox">
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" name="estado" required>
                    </div>
                </div>
                <div class="col-12">
                    <input type="submit" id="submit" name="submit" required>
                </div>
            </div>
        </form>
    </section>

    <section class="consultas">
        <div class="container">
            <h1 class="title">Consultas anteriores</h1>
        </div>
    </section>

    <footer>
        Lucas Mantoani
    </footer>
</body>

</html>