async function pesquisar() {
    // Recuperar o id da categoria
    var cpf = document.getElementById("cpf").value;
    console.log('entrou aqui: ',cpf);

    // Fazer a requisição para o arquivo pesquisar.php
    var dados = await fetch("../php/ficha_paciente.php?cpf=" + cpf);

    // Ler os dados retornado do arquivo pesquisar.php
    var resposta = await dados.json();
    console.log(resposta);

    // Acessa o IF quando não retornar nenhum produtos do banco de dados
    if(!resposta['status']){
        // Enviar a mensagem de erro do JavaScript para o HTML
        document.getElementById('msg').innerHTML = resposta['msg'];
    }else{
        // Substituir a mensagem de erro
        document.getElementById('msg').innerHTML = "";
        
        // Enviar a lista de produtos do JavaScript para o HTML
        document.getElementById("listar-produtos").innerHTML = resposta['dados'];
    }

}