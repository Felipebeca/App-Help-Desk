<?php 
session_start();

// trabalhando o texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']); 

$texto = $_SESSION['id']. '#' . $titulo . '#' . $categoria. '#'. $descricao . PHP_EOL;

// abrir arquivo 
$arquivo = fopen('../../app_help_desck/arquivo.hd','a');

// escrever arquivo 
fwrite($arquivo, $texto);

// fechar arquivo 
fclose($arquivo);

header('location: home.php');






?>