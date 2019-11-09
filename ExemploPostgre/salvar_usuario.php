<?php
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$conexao = pg_connect("host=localhost port=5432 dbname=livro user=livro password=livro123") or die("Erro de conexão.");
	if($id){	
		$query = "update usuario set nome = '$nome', email = '$email' where id =$id";
	}
	else{
		$query = "insert into usuario (nome, email, data_cadastro) values ('$nome', '$email', now())";
	}
	$res = pg_query($conexao, $query);
	pg_close($conexao);
	header('Location: index.php');
?>
