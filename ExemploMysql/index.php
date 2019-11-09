<html>
	<title>Livro AWS</title>
	<meta charset="UTF-8">
	<body>
		<h1>Lista de usuários</h1>
		<table border=1>
		<tr>
			<td width="10%"><b>ID</b></td>
			<td width="30%"><b>Nome</b></td>
			<td width="30%"><b>E-mail</b></td>
			<td width="10%"><b>Data Cadastro</b></td>
			<td width="20%"><b>Ação</b></td>
		</tr>
		<?php
			$conexao = mysqli_connect("localhost", "livro", "livros123") or die("Erro de conexão.");
			mysqli_select_db($conexao, "livro") or die("Erro de seleção de bando de dados");
			
			$query = "select id, nome, email, data_cadastro from usuario order by id";
			$res = mysqli_query($conexao, $query);
			while($linha = mysqli_fetch_array($res)){
		?>
		<tr>
			<td><?php echo $linha['id']; ?></td>
			<td><?php echo $linha['nome']; ?></td>
			<td><?php echo $linha['email']; ?></td>
			<td><?php echo $linha['data_cadastro']; ?></td>
			<td><a href="form_usuario.php?id=<?php echo $linha['id'];?>">Editar</a> | <a href="deletar_usuario.php?id=<?php echo $linha['id'];?>">Deletar</a></td>
		</tr>
		<?php
			}
			mysqli_close($conexao);
		?>
		</table>
		<p>
			<a href="form_usuario.php">Novo</a>
		</p>
	</body>
</html>
