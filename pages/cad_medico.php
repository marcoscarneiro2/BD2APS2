<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
	<title>Saúde Sempre - Cadastro Médico</title>
</head>
<body>
	<div class="container">
		<div class="topo">
			<a href="index.html"><img class="logo" src="../assets/img/logo2.png"></a>
			<p class="titulo">Cadastro Médico</p><hr>
		</div>
		<div>
			<form method="POST" action="../php/cadastro_medico.php">
				<div class="row">
					<div class="col-20">
						<label for="crm">CRM</label>
					</div>
					<div class="col-80">
						<input type="text" id="crm" name="crm" placeholder="Digite o seu CRM">
					</div>
				</div>
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
						<label for="especialidade">Especialidade</label>
					</div>
					<div class="col-80">
						<select id="especialidade" name="especialidade">
							<option value="clinico">Clinico Geral</option>
							<option value="ortopedista">Ortopedista</option>
							<option value="cardiologista">Cardiologista</option>
							<option value="oncologia">Oncologista</option>
							<option value="gastro">Gastroenterologista</option>
							<option value="geriatra">Geriatria</option>
							<option value="dermatologista">Dermatologista</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-20">
						<label for="cnpj">CNPJ/CPF</label>
					</div>
					<div class="col-80">
						<input type="text" id="cnpj" name="cnpj" placeholder="Digite o seu nome CNPJ ou CPF">
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
						<input type="text" id="email" name="email" placeholder="Digite o seu e-mail">
					</div>
				</div>
				<div class="row botao">
    				<input type="submit" value="Salvar">
                    <input type="button" value="Cancelar" onclick="window.location.href = '../index.php';">
  				</div>
			</form>
		</div>
	</div>
</body>
</html>
