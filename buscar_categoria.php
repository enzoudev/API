<?php
	include 'cors_policy.php';
	include 'conexao.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET')

	$sql = "SELECT * FROM Categorias WHERE id =6";

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
    }

    echo json_encode($response);
?>