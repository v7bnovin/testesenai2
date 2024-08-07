<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos foram preenchidos
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $opcao = htmlspecialchars($_POST['opcao']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Exibe os dados recebidos
    echo "<h1>Dados Recebidos</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Opção Selecionada:</strong> $opcao</p>";
    echo "<p><strong>Mensagem:</strong></p>";
    echo "<p>$mensagem</p>";
} else {
    echo "Nenhum dado foi enviado.";
}
?>
