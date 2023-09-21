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
 
    $id = 1;

	$sql = "SELECT * FROM Categorias WHERE id=$id";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $categorias = [];
        while ($row = $result->fetch_assoc()) {
            array_push($categorias, $row);
        }

        $response = [
            'categorias' => $categorias
        ];

    } else {
        $response = [
            'categorias' => 'Nenhuma categoria encontrada!'
        ];
    // }

    echo json_encode($response);
?>