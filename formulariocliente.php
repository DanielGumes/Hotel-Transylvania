<?php

if (isset($_POST['submit'])) {

    // print_r('Nome: '. $_POST['nome']);
    // print_r('<br>');
    // print_r('Email '. $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone: '. $_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo: '. $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade: '. $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: '. $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereço: ' . $_POST['endereco']);
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];


    $result = mysqli_query($conexao, "INSERT INTO clientes(nome, email, cpf,telefone, sexo, data_nascimento, endereco) values('$nome', '$email', '$cpf','$telefone', '$sexo', '$data_nascimento', '$endereco')");

    header('Location:clientes.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulário | Clientes </title>

    <link rel="stylesheet" href="FORMULARIOS.css">
</head>

<body>
    <div class="buttonVoltar">
        <a href="Home.php" class="btnVoltar">Voltar</a>
    </div>
    <div class="box">
        <form action="formulariocliente.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" placeholder="Nome Completo" required>
                    <label for="nome" class="labelInput"></label>
                    <br>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" placeholder="Email" required>
                    <label for="email" class="labelInput"></label>
                    <br>

                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" placeholder="CPF" required>
                    <label for="cpf" class="labelInput"></label>
                    <br>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" placeholder="Telefone" required>
                        <label for="telefone" class="labelInput"></label>

                    </div>

                    <br>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outros" name="genero" value="outros" required>
                    <label for="outros">Outros</label>
                    <br><br>

                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>

                    <br><br><br>

                    <br>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                    <br>
                    <br><br>
                    <input type="submit" name="submit" id="submit">

            </fieldset>

        </form>
    </div>
</body>

</html>