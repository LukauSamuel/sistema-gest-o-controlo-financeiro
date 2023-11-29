<?php

/*session_start();

 include_once('conexao.php');
 $nome = $_POST['nome'];
 $tipo = $_POST['tipo'];
 $valor = $_POST['valor'];
 $dataAtual = $_POST['dataAtual'];
 $id = $_SESSION['id_user'];

 $data_formatada = date("Y-m-d", strtotime($dataAtual));

 $reuslt = mysqli_query($conexao, "INSERT INTO GASTOS (id_user, nome, tipo, valor, dataAtual) 
 VALUE ($id, '$nome', '$tipo', '$valor', '$data_formatada')");

 echo "Cadastrado com sucesso!", $dataAtual;*/

 

class InserirGasto {

    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function inserirGasto($nome, $tipo, $valor, $dataAtual, $idUsuario) {
        $dataFormatada = date("Y-m-d", strtotime($dataAtual));

        $query = "INSERT INTO GASTOS (id_user, nome, tipo, valor, dataAtual) 
                  VALUES ($idUsuario, '$nome', '$tipo', '$valor', '$dataFormatada')";

        $resultado = mysqli_query($this->conexao, $query);

        if ($resultado) {
            
            header('Location: ../templets/template/pages/forms/basic_elements.php?mensagem=Cadastrado com sucesso!');
        } else {
            echo "Erro ao cadastrar gasto: ", mysqli_error($this->conexao);
        }
    }
}

// Exemplo de uso
session_start();
include_once('conexao.php');

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$dataAtual = $_POST['dataAtual'];
$idUsuario = $_SESSION['id_user'];

$inserirGasto = new InserirGasto($conexao);
$inserirGasto->inserirGasto($nome, $tipo, $valor, $dataAtual, $idUsuario);
?>