<?php

/*session_start();

 include_once('conexao.php');
 $id = $_SESSION['id_user'];

 
 $sql = ("SELECT *FROM DEPOSITAR WHERE id_user=$id  ORDER BY dataAtual DESC LIMIT 5");

$resultado = $conexao->query($sql);

$sql2 = ("SELECT *FROM GASTOS WHERE id_user=$id  ORDER BY dataAtual DESC LIMIT 5");
$resultado2 = $conexao->query($sql2);


$sql3 = ("SELECT *FROM DIVIDAS WHERE id_user=$id  ORDER BY dataAtual DESC LIMIT 5");
$resultado3 = $conexao->query($sql3);

$sql4 = ("SELECT *FROM RECEBER WHERE id_user=$id  ORDER BY dataAtual DESC LIMIT 5");
$resultado4 = $conexao->query($sql4);*/


class TransacoesFinanceiras {

    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function obterUltimosDepositos($idUsuario, $limite = 5) {
        $sql = "SELECT * FROM DEPOSITAR WHERE id_user=$idUsuario ORDER BY dataAtual DESC LIMIT $limite";
        return $this->conexao->query($sql);
    }

    public function obterUltimosGastos($idUsuario, $limite = 5) {
        $sql = "SELECT * FROM GASTOS WHERE id_user=$idUsuario ORDER BY dataAtual DESC LIMIT $limite";
        return $this->conexao->query($sql);
    }

    public function obterUltimasDividas($idUsuario, $limite = 5) {
        $sql = "SELECT * FROM DIVIDAS WHERE id_user=$idUsuario ORDER BY dataAtual DESC LIMIT $limite";
        return $this->conexao->query($sql);
    }

    public function obterUltimosRecebimentos($idUsuario, $limite = 5) {
        $sql = "SELECT * FROM RECEBER WHERE id_user=$idUsuario ORDER BY dataAtual DESC LIMIT $limite";
        return $this->conexao->query($sql);
    }


    public function obterMaiorGasto($idUsuario) {
        $sql = "SELECT MAX(valor) as maior_gasto FROM GASTOS WHERE id_user=$idUsuario";
        $resultado = $this->conexao->query($sql);
        $maiorGasto = $resultado->fetch_assoc();
        return $maiorGasto['maior_gasto'];
    }

    public function obterMValor($idUsuario, $limite = 1){
        $sql = "SELECT * FROM GASTOS WHERE id_user=$idUsuario ORDER BY valor DESC LIMIT 1";
        return $this->conexao->query($sql);
    }
}

// Exemplo de uso
session_start();
include_once('conexao.php');

$idUsuario = $_SESSION['id_user'];
$transacoes = new TransacoesFinanceiras($conexao);

$resultado = $transacoes->obterUltimosDepositos($idUsuario);
$resultado2 = $transacoes->obterUltimosGastos($idUsuario);
$resultado3 = $transacoes->obterUltimasDividas($idUsuario);
$resultado4 = $transacoes->obterUltimosRecebimentos($idUsuario);
 //Maior valor
 $maiorValor = $transacoes->obterMValor($idUsuario);
$maiorGasto = $transacoes->obterMaiorGasto($idUsuario);
?>
