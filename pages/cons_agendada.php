<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
	<title>Saúde Sempre - Consulta Agendada</title>
</head>
<body>
	<div class="container">
		<div class="topo">
			<a href="index.html"><img class="logo" src="../assets/img/logo2.png"></a>
			<p class="titulo">Consulta Agendada</p><hr>
		</div>
		
		<?php
		include_once '../php/conexao.php';

		// Consulta para recuperar os dados do banco
		$sql = "SELECT id,cpf,nome,data_consulta,horario FROM marcar_consulta";
		$result = $conn->query($sql);
		$conn->close();
		?>
		<table class="blue-white-table">
		<thead>
			<tr>
				<th>CPF</th>
				<th>Nome</th>
				<th>Data</th>
				<th>Horário</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Loop através dos resultados da consulta e exibição dos dados na tabela
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["cpf"] . "</td>";
					echo "<td>" . $row["nome"] . "</td>";
					echo "<td>" . $row["data_consulta"] . "</td>";
					echo "<td>" . $row["horario"] . "</td>";
					echo "<td>Pendente</td>";
					echo "<td><button class='editar'><a href='editar_marcacao_consulta.php?id=$row[id]'>Editar</a></button></td>";
					echo "<td><button class='excluir'><a href='../php/deletar_marcacao_consulta.php?id=$row[id]'>Deletar</a></button></td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='4'>Nenhum dado encontrado.</td></tr>";
			}
			?>
		</tbody>
	</table>

	</div>
	<script>
function editarDados(id) {
    // Lógica para editar os dados com o ID fornecido
    console.log("Editar registro com ID: " + id);
}

function excluirDados(id) {
    // Lógica para excluir os dados com o ID fornecido
    console.log("Excluir registro com ID: " + id);
}
</script>
</body>
</html>
