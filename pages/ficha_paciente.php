<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
	<title>Saúde Sempre - Ficha do Paciente</title>
</head>
<body>
	<div class="container">
		<div class="topo">
			<a href="index.html"><img class="logo" src="../assets/img/logo2.png"></a>
			<p class="titulo">Ficha do Paciente</p><hr>
			<span id="msg"></span>
		</div>
		<div class="row">
			<form>

				<div class="col-20">
					<label for="cpf">CPF</label>
				</div>
				<div class="col-80">
					<select id="cpf" name="cpf" onchange="pesquisar();">
					<option></option>
						<?php
						include_once '../php/conexao.php';
						// Consulta SQL para obter os CPFs dos clientes
						$sql = "SELECT cpf FROM paciente";
						$resultado = $conn->query($sql);

						// Verificar se a consulta retornou resultados
						if ($resultado->num_rows > 0) {
							// Loop pelos resultados e criar as opções do select
							while ($row = $resultado->fetch_assoc()) {
								$cpf = $row['cpf'];

								// Adicionar uma opção ao select com o CPF do cliente
								echo "<option value='$cpf'>$cpf</option>";
							}
						}
						
						$conn->close();
						?>
					</select>
				</div>
			</form>
		</div>
		<div>
			<form>
				<div class="row">
					<div class="col-20">
						<label for="nome">Nome</label>
					</div>
					<div class="col-80">
						<input type="text" id="nome" name="nome" placeholder="Digite o seu nome completo">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="data_nasc">Data de Nascimento</label>
					</div>
					<div class="col-80">
						<input type="text" id="data_nasc" name="data_nasc" placeholder="Digite a sua data de nascimento">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="endereco">Endereço</label>
					</div>
					<div class="col-80">
						<input type="text" id="endereco" name="endereco" placeholder="Digite o seu endereço">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="telefone">Telefone</label>
					</div>
					<div class="col-80">
						<input type="text" id="telefone" name="telefone" placeholder="Digite o seu telefone">
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="email">E-mail</label>
					</div>
					<div class="col-80">
						<input type="email" id="email" name="email" placeholder="Digite o seu e-mail">
					</div>
				</div>
				<div class="row botao">
    				<input type="submit" value="Submit">
					<input type="button" value="Cancelar" onclick="window.location.href = '../index.php';">
  				</div>
			</form>
		</div>
	</div>

	<span id="listar-produtos"></span>

<script src="../assets/js/custom.js"></script>
</body>
</html>
