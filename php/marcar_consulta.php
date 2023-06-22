<?php
session_start();
include_once 'conexao.php';

 // Obtém os valores dos campos do formulário
 $data = $_POST["data"];
 $hora = $_POST["horario"];
 $tipoconsulta = $_POST["tipo_consulta"];
 $cpf = $_POST["cpf"];
 $nome = $_POST["nome"];
 $observacao = $_POST["obs"];

// Checar se existem campos vazios
if (empty($nome) || empty($cpf)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:./pages/cad_medico.php");
} else {

	  // Prepara a consulta SQL
      $sql = "INSERT INTO marcar_consulta (data_consulta, horario, tipoPlano, cpf, nome, observacao)
      VALUES ('$data', '$hora', '$tipoconsulta', '$cpf', '$nome' ,'$observacao')";

      // Executa a consulta SQL
      if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso.";
      } else {
        echo "Erro ao inserir registro: " . $conn->error;
      }

	$conn->close();
}
?>