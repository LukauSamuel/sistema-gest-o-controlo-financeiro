<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];


    // Verificar se o e-mail já existe na tabela
    $verifica_email = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email'");
    if (mysqli_num_rows($verifica_email) > 0) {
        // E-mail já existe, faça o tratamento adequado, como exibir uma mensagem de erro
        
        header('Location: ../templets/template/pages/samples/register.php?mensagem=Erro! Email já existe!');
    } 

    else {
        // E-mail não existe, então proceda com a inserção
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,tipo) 
            VALUES ('$nome', '$email', '$senha', '$tipo')");
        
        if ($result) {
            // Inserção bem-sucedida, redirecionar para a página de login
            header('Location: ../templets/template/pages/samples/login.php');
        } else {
            // Tratar erro na inserção, como exibir uma mensagem de erro
            echo "Erro ao cadastrar usuário.";
        }
    }
}
?>