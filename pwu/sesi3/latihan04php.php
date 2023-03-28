<?php
    $cars = array("Honda", "BMW", "Lamborghini");

    print_r($cars);

    echo "<hr>";

    $cars[0] = "Honda";
    $cars[1] = "BMW";
    $cars[2] = "Lamborghini";

    print_r($cars);

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($cars);

