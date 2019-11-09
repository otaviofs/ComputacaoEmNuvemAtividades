<?php
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$conexao = mysqli_connect("localhost", "livro", "livros123") or die("Erro de conexão.");
	mysqli_select_db($conexao, "livro") or die("Erro de seleção de bando de dados");
	if($id){	
		$query = "update usuario set nome = '$nome', email = '$email' where id =$id";
	}
	else{
		$query = "insert into usuario (nome, email, data_cadastro) values ('$nome', '$email', now())";
	}
	$res = mysqli_query($conexao, $query);
	mysqli_close($conexao);
	header('Location: index.php');
?>
