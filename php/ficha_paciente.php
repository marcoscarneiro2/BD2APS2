<?php
// Incluir a conexão com o banco de dados
include_once 'conexao.php';

// Receber os dados do JavaScript
$cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_NUMBER_INT);

// Inicializar a variável $retorna
$retorna = [];

// Acessa o IF quando o campo cpf possui valor
if (!empty($cpf)) {

    // Criar QUERY pesquisar produtos
    $query_produtos = "SELECT *
                FROM paciente 
                WHERE cpf = ?";

    // Preparar a QUERY
    $stmt = $conn->prepare($query_produtos);

    // Substitui o link pelo valor que vem do formulário
    $stmt->bind_param('i', $cpf);

    // Executar a QUERY
    $stmt->execute();

    // Recebe os dados dos produtos
    $listar_produtos = "";

    // Acessa o IF quando retornar produtos no banco de dados
    $result_produtos = $stmt->get_result();
    if ($result_produtos->num_rows != 0) {
        // Ler os registros retornados do banco de dados 
        while ($row_produto = $result_produtos->fetch_assoc()) {
            // Imprimir o valor retornado do banco de dados
            //$listar_produtos .= "ID: " . $row_produto['id'] . "<br>";
           // $listar_produtos .= "Nome: " . $row_produto['nome'] . "<br>";
           // $listar_produtos .= "Data de nascimento: " . $row_produto['dataNasc'] . "<br>";
            $listar_produtos .= "<hr>";
        }
        // Criar o array de informações que será retornado para o JavaScript
      //  $retorna = ['status' => true, 'dados' => $listar_produtos];
    } else {
        // Criar o array de informações que será retornado para o JavaScript
       // $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Nenhum produto encontrado!</p>"];
    }
} else {
    // Criar o array de informações que será retornado para o JavaScript
    $retorna = ['status' => false, 'msg' => "<p style='color: #f00;'>Erro: Nenhum produto encontrado!</p>"];
}

// Converter o array em objeto e retornar para o JavaScript
echo json_encode($retorna);

$conn->close();
?>
