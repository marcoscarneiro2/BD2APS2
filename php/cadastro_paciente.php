<?php
session_start();
include_once 'conexao.php';

 // Obtém os valores dos campos do formulário
 $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $tipoplano = $_POST['tipoplano'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

// Checar se existem campos vazios
if (empty($cpf) || empty($nome)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:./pages/cad_medico.php");
} else {

	  // Prepara a consulta SQL
      $sql = "INSERT INTO paciente (CPF, Nome, DataNascimento, TipoPlano, Telefone, Endereco)
      VALUES ('$cpf', '$nome', '$data_nasc', '$tipoplano', '$telefone', '$endereco')";

      // Executa a consulta SQL
      if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso.";
      } else {
        echo "Erro ao inserir registro: " . $conn->error;
      }

	$conn->close();
}
?>