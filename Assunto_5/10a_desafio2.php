<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    
    if (empty($nome)) {
        $msg = "<p style='color: red;'>Erro: O nome não pode estar vazio.</p>";
    } elseif (!is_numeric($preco) || $preco <= 0) {
        $msg = "<p style='color: red;'>Erro: O preço deve ser um número válido.</p>";
    } else {
 
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

    
        $conn = new mysqli($servername, $username, $password, $dbname);

      
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Query de inserção
        $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

        if ($conn->query($sql) === TRUE) {
            $msg = "<p style='color: #058c07;'>Produto cadastrado com sucesso!</p>";
        } else {
            $msg = "<p style='color: #ff0000;'>Erro ao cadastrar: " . $conn->error . "</p>";
        }

       
        $conn->close();
    }

  
    header('Refresh: 3; url=' . $_SERVER['PHP_SELF']);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>

    <h2>Cadastrar Produto</h2>
  
    <form method="POST" action="">
        <label for="nome">Nome do Produto: </label><br>
        <input type="text" name="nome"><br><br>

        <label for="preco">Preço do Produto: </label><br>
        <input type="number" step="0.01" name="preco"><br><br>

        <button type="submit">Cadastrar</button>
    </form>


    <?php if ($msg) echo $msg; ?>

</body>
</html>