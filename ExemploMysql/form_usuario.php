<html>
	<title>Livro AWS</title>
	<meta charset="UTF-8">
	<?php
		$id = $_GET['id'];
		$conexao = mysqli_connect("localhost", "livro", "livros123") or die("Erro de conexão.");
		mysqli_select_db($conexao, "livro") or die("Erro de seleção de bando de dados");
			
		$query = "select id, nome, email, data_cadastro from usuario where id = $id";
		$res = mysqli_query($conexao, $query);
		$linha = mysqli_fetch_array($res);
		$nome = $linha["nome"];
		$email = $linha["email"];
		mysqli_close($conexao);
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
