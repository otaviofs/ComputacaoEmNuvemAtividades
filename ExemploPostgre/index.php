<html>
	<title>Livro AWS</title>
	<meta charset="UTF-8">
	<body>
		<h1>Lista de usuários - PostgreSQL</h1>
		<table border=1>
		<tr>
			<td width="10%"><b>ID</b></td>
			<td width="30%"><b>Nome</b></td>
			<td width="30%"><b>E-mail</b></td>
			<td width="10%"><b>Data Cadastro</b></td>
			<td width="20%"><b>Ação</b></td>
		</tr>
		<?php
			$conexao = pg_connect("host=localhost port=5432 dbname=livro user=livro password=livro123") or die("Erro de conexão.");
			
			$query = "select id, nome, email, data_cadastro from usuario order by id";
			$res = pg_query($conexao, $query);
			while($linha = pg_fetch_array($res)){
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
			pg_close($conexao);
		?>
		</table>
		<p>
			<a href="form_usuario.php">Novo</a>
		</p>
	</body>
</html>
