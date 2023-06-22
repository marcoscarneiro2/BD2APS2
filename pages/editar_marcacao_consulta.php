<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
	<title>Saúde Sempre - Editar Consulta</title>
</head>
<body>
	<div class="container">
		<div class="topo">
			<a href="index.html"><img class="logo" src="../assets/img/logo2.png"></a>
			<p class="titulo">Editar Consulta</p><hr>
		</div>
		<?php
			include_once '../php/conexao.php';

			$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

			$sql = "SELECT id, cpf, nome, data_consulta, horario,observacao FROM marcar_consulta WHERE id = $id";
			$result = $conn->query($sql);
			
			if ($result && $result->num_rows > 0) {
				$linha = $result->fetch_assoc();
				// Restante do seu código para exibir/editar os dados
			} else {
				echo "Nenhum resultado encontrado.";
			}
		?>
		<div>
			<form method="POST" action="../php/editar_marcacao_consulta.php">
				<div class="row">
				<input style="display:none" type="number" value="<?php echo $linha['id']; ?>" id="id" name="id">
					<div class="col-20">
						<label for="data">Data</label>
					</div>
					<div class="col-80">
					<input type="date" value="<?php echo $linha['data_consulta']; ?>" id="data" name="data" placeholder="Digite a data para próxima consulta">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="horario">Horário</label>
					</div>
					<div class="col-80">
					<input type="time" id="horario" value="<?php echo $linha['horario']; ?>" name="horario" placeholder="Digite o horário da consulta">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="tipo_consulta">Tipo de consulta</label>
					</div>
					<div class="col-80">
					<select id="tipo_consulta" name="tipo_consulta" value="<?php echo $linha['tipo_consulta']; ?>">
						<option value="plano">Plano de Saúde</option>
						<option value="particular">Particular</option>
					</select>
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="cpf">CPF</label>
					</div>
					<div class="col-80">
					<input readonly='true' type="text" id="cpf" value="<?php echo $linha['cpf']; ?>" name="cpf" placeholder="Digite o seu CPF">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="nomne">Nome</label>
					</div>
					<div class="col-80">
					<input readonly='true' type="text" id="nome" value="<?php echo $linha['nome']; ?>" name="nome" placeholder="Digite o seu nome completo">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="obs">Observação</label>
					</div>
					<div class="col-80">
					<textarea id="obs" name="obs" placeholder="Digite as observações" style="height:140px"><?php echo $linha['observacao']; ?></textarea>
					</div>
				</div>
				<div class="row botao">
    				<input type="submit" value="Submit">
					<input type="button" value="Cancelar" onclick="window.location.href = '../index.php';">
  				</div>
			</form>
		</div>
	</div>
</body>
</html>
