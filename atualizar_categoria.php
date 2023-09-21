<?php
	include 'cors_policy.php';
	include 'conexao.php';
    //  GET Listar dados
    //  POST Enviar dados para inserir
    //  PUT Enviar dados para atualizar
    //  DELETE Enviar dados para excluir

    // if($_SERVER['REQUEST_METHOD'] == 'GET')

     // Obtém o corpo da solicitação POST
    //  $data = file_get_contents("php://input");
    //  // Decodifica o JSON para um objeto PHP
    //  $requestData = json_decode($data);
    //  // Agora você pode acessar os dados usando $requestData
    //  $id = $requestData->id;
 
    $id = ;

	$sql = "UPDATE Categorias VALUES id = $id";

    if$result = $connection->query($sql) == true ) {
        $response = [
            "mensagem": 'Categoria inserida com sucesso!'
        ]
    } else {
        $response = [
            'mensagem': "Erro ao inserir categoria!"
        ]
    }

    echo json_encode($response);
?>