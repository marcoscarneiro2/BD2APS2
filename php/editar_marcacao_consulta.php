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
 $id = $_POST["id"];

// Checar se existem campos vazios
if (empty($hora) || empty($tipoconsulta)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:./pages/cad_medico.php");
} else {

	  // Prepara a consulta SQL
      $sql = "UPDATE marcar_consulta
      SET data_consulta = '$data',
      horario = '$hora',
      tipoPlano = '$tipoconsulta',
      observacao = '$observacao'
      where id = $id";

      // Executa a consulta SQL
      if ($conn->query($sql) === TRUE) {
        echo "Registro alterado com sucesso.";
      } else {
        echo "Erro ao alterar registro: " . $conn->error;
      }

	$conn->close();
}
?>