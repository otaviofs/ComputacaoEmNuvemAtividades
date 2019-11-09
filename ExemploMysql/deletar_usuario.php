<?php
	$id = $_GET['id'];
	$conexao = mysqli_connect("localhost", "livro", "livros123") or die("Erro de conexão.");
	mysqli_select_db($conexao, "livro") or die("Erro de seleção de bando de dados");
	$query = "delete from usuario where id=$id";
	$res = mysqli_query($conexao, $query);
	mysqli_close($conexao);
	header('Location: index.php');
?>
