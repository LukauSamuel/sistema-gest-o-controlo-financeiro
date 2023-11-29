<?php
 session_start();
 unset($_SESSION['id_user']);
 unset($_SESSION['email']);
 unset($_SESSION['senha']);
 header('Location: ../templets/template/pages/samples/login.php');

?>