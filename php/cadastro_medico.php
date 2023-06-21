<?php
session_start();
include_once 'conexao.php';

 // Obtém os valores dos campos do formulário
 $crm = $_POST["crm"];
 $nome = $_POST["nome"];
 $especialidade = $_POST["especialidade"];
 $cnpj = $_POST["cnpj"];
 $data_nasc = $_POST["data_nasc"];
 $endereco = $_POST["endereco"];
 $telefone = $_POST["telefone"];
 $email = $_POST["email"];


// Checar se existem campos vazios
if (empty($crm) || empty($nome)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:./pages/cad_medico.php");
} else {

	  // Prepara a consulta SQL
      $sql = "INSERT INTO medico (CRM, Nome, Especialidade, CPF, DataNascimento, Endereco, Telefone, Email)
      VALUES ('$crm', '$nome', '$especialidade', '$cnpj', '$data_nasc', '$endereco', '$telefone', '$email')";

      // Executa a consulta SQL
      if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso.";
      } else {
        echo "Erro ao inserir registro: " . $conn->error;
      }

	$conn->close();
}
?>