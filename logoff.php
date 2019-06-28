<?php
session_start();
// destruir a variavel de sessão, forçando o redirecionamento para index / pag. de login. 
 session_destroy();
 header('location:index.php');

// remover indices do array  
// unset();

?>