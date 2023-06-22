<?php
session_start();
include_once 'conexao.php';

 // Obtém os valores dos campos do formulário
 $id = $_GET["id"];

// Checar se existem campos vazios
if (empty($id)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:./pages/cad_medico.php");
} else {

	  // Prepara a consulta SQL
      $sql = "DELETE FROM marcar_consulta WHERE id = $id";
      
      // Executa a consulta SQL
      if ($conn->query($sql) === TRUE) {
        echo "Registro apagado com sucesso.";
      } else {
        echo "Erro ao apagado registro: " . $conn->error;
      }

	$conn->close();
}
?>