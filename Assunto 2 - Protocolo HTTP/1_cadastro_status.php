<!DOCTYPE html>
<html lang="pt-br">
    <head>
            <meta charset="UTF-8">
            <title>Cadastro - status Codes</title>
</head>

</html>
<body>
    <h1>Cadastro de alunos (Com status Codes)</h1>

    <form method="post" action="">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label for="idade">idade </label>
    <imput type="number" name="idade" id="idade" require><br><br>

    <button type="submit" value="Enviar"> Enviar </button>

</form>
<hr>

<?php
// $_SERVER é uma variavel superglobal do PHP que cintem varias informacoes sobre requisicoes feitas ao servidor. Nestecaso verifica se o metoodo ultilizado foi POST e se verdade captura as informacoes (nome e idade)
if($_SERVER['REQUEST_METHOD']== 'POST') {
    // Pega os valores digitados no formulario (Pelo usuario)
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // Tratativa dos erros por "Status Code"

    // Erro por parte do usuario (Faixa 400 - Não preencheu Nome ou Idade)
    if($nome == '' || $idade == ""){
        http_response_code(400);
        echo "<h2>Status 400 - Faltou preenchar nome ou idade!</h2>";

        // Erro por parte do usuario (Faixa 400 - Usuario prencheu errado, por exemplo em vez de: "20" escreveu "vinte")
    }elseif (!is_numeric($idade)) {
        http_response_code(400);
        echo "<h2>Status 400 - Idade precisa ser um numero!</h2>";

        // Resposta para quando tudo foi bem (Cadastro feito com sucesso)
    } else {
        http_response_code(201);
        echo "<h2>Status 201 - Criado: $nome, $idade anos!</h2>";
    }
} else {
    //Status 200 - Usuario entrou na pagina mas ainda nao enviou 
    http_response_code(200);
    echo "<h2>Status 200 - Preencha o fomulario acima e envie</h2>";
}

?>

</body>
</html>