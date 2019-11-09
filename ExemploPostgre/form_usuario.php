<html>
	<title>Livro AWS</title>
	<meta charset="UTF-8">
	<?php
		$id = $_GET['id'];
		$conexao = pg_connect("host=localhost port=5432 dbname=livro user=livro password=livro123") or die("Erro de conexão.");
		
		$query = "select id, nome, email, data_cadastro from usuario where id = $id";
		$res = pg_query($conexao, $query);
		$linha = pg_fetch_array($res);
		$nome = $linha["nome"];
		$email = $linha["email"];
		pg_close($conexao);
	?>
	<body>
		<h1>Formulário</h1>
		<form method="post" action="salvar_usuario.php">
			<input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
			<table border=1>
			<tr>
				<td><b>Nome:</b></td>
				<td><b><input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" size="50px" /></b></td>	
			</tr>
			<tr>
				<td><b>E-mail:</b></td>
				<td><b><input type="text" id="email" name="email" value="<?php echo $email; ?>" size="50px" /></b></td>	
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Salvar" /></td>
			</tr>
			</table>
		</form>

	</body>
</html>
