<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
	<title>Saúde Sempre - Marcação de Consulta</title>
</head>
<body>
	<div class="container">
		<div class="topo">
			<a href="index.html"><img class="logo" src="../assets/img/logo2.png"></a>
			<p class="titulo">Marcação de Consulta</p><hr>
		</div>
		<div>
			<form method="POST" action="../php/marcar_consulta.php">
				<div class="row">
					<div class="col-20">
						<label for="data">Data</label>
					</div>
					<div class="col-80">
						<input type="date" id="data" name="data" placeholder="Digite a data para próxima consulta">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="horario">Horário</label>
					</div>
					<div class="col-80">
						<input type="time" id="horario" name="horario" placeholder="Digite o horário da consulta">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="tipo_consulta">Tipo de consulta</label>
					</div>
					<div class="col-80">
						<select id="tipo_consulta" name="tipo_consulta">
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
						<input type="text" id="cpf" name="cpf" placeholder="Digite o seu CPF">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="nomne">Nome</label>
					</div>
					<div class="col-80">
						<input type="text" id="nome" name="nome" placeholder="Digite o seu nome completo">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="obs">Observação</label>
					</div>
					<div class="col-80">
						<textarea id="obs" name="obs" placeholder="Digite as observações" style="height:140px"></textarea>
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
