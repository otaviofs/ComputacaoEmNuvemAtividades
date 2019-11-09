<?php
	$id = $_GET['id'];
	$conexao = pg_connect("host=localhost port=5432 dbname=livro user=livro password=livro123") or die("Erro de conexão.");
	$query = "delete from usuario where id=$id";
	$res = pg_query($conexao, $query);
	pg_close($conexao);
	header('Location: index.php');
?>	
