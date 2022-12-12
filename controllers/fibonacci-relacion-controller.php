<?php
require("..\\services\\fibonacci-service.php");

// GET fibonacci-controller
header("Content-Type:application/json");
if (isset($_GET['position']) && $_GET['position'] != "" && $_GET['position'] >= 1) {

    $fibonacci = new Fibonacci();
    $n = $_GET['position'];

    echo json_encode([
        "success" => true,
        "message" => "Consulta exitosa",
        "data" => [
            "fibonacci" =>  $fibonacci->resultRelacionRecurrencia($n),
            "position" => $fibonacci->position()
        ]
    ]);
} else {

    echo json_encode([
        "success" => false,
        "message" => "Consulta errada",
        "data" => "El número solicitado debe ser mayor o igual que 1."
    ]);

}