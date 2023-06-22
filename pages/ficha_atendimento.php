<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
	<title>Saúde Sempre - Ficha de Atendimento</title>
</head>
<body>
	<div class="container">
		<div class="topo">
			<a href="index.html"><img class="logo" src="../assets/img/logo2.png"></a>
			<p class="titulo">Ficha de Atendimento</p><hr>
		</div>
		<div>
			<form>
				<div class="row">
					<div class="col-20">
						<label for="data_hora">Data | Horário</label>
					</div>
					<div class="col-80">
						<input type="datetime-local" id="data_hora" name="data_hora">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="cpf">CPF</label>
					</div>
					<div class="col-80">
						<input type="text" id="cpf" name="cpf" placeholder="Digite o CPF">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="nome">Nome</label>
					</div>
					<div class="col-80">
						<input type="text" id="nome" name="nome" placeholder="Digite o nome do paciente">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="receituario">Receituário</label>
					</div>
					<div class="col-80">
						<textarea id="receituario" name="receituario" placeholder="Digite aqui o receituário" style="height:100px"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="diagnostico">Diagnóstico</label>
					</div>
					<div class="col-80">
						<textarea id="diagnostico" name="diagnostico" placeholder="Digite o dianóstico" style="height:100px"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="retorno">Retorno</label>
					</div>
					<div class="col-80">
						<input type="datetime-local" id="retorno" name="retorno">
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
