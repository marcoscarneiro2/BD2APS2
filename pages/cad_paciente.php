<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
	<title>Saúde Sempre - Cadastro de Paciente</title>
</head>
<body>
	<div class="container">
		<div class="topo">
			<a href="index.html"><img class="logo" src="../assets/img/logo2.png"></a>
			<p class="titulo">Cadastro de paciente</p><hr>
		</div>
		<div>
			<form method="POST" action="../php/cadastro_paciente.php">
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
						<input type="text" id="nome" name="nome" placeholder="Digite o nome completo do paciente">
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
						<label for="tipoplano">Tipo de Plano</label>
					</div>
					<div class="col-80">
                        <select id="tipoplano" name="tipoplano">
                            <option value=""></option>
                            <option value="SaudeIndividual">Plano de Saúde Individual</option>
                            <option value="SaudeFamiliar">Plano de Saúde Familiar</option>
                            <option value="SaudeEmpresarial">Plano de Saúde Empresarial</option>
                            <option value="Odontológico">Plano Odontológico</option>
                            <option value="Saude por Adesão">Plano de Saúde por Adesão</option>
                        </select>
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
				<div class="row botao">
    				<input type="submit" value="Salvar">
                    <input type="button" value="Cancelar" onclick="window.location.href = '../index.php';">
  				</div>
			</form>
		</div>
	</div>
</body>
</html>
