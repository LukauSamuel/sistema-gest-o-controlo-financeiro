<?php

session_start();

 include_once('conexao.php');
 $nome = $_POST['nome'];
 $tipo = $_POST['tipo'];
 $valor = $_POST['valor'];
 $dataAtual = $_POST['dataAtual'];
 $id = $_SESSION['id_user'];

 $data_formatada = date("Y-m-d", strtotime($dataAtual));

 $reuslt = mysqli_query($conexao, "INSERT INTO DIVIDAS (id_user, nome, valor, dataAtual, tipo) 
 VALUE ($id, '$nome', '$valor', '$data_formatada', '$tipo')");

 echo "Cadastrado com sucesso!", $dataAtual;


?>