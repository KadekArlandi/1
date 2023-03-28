<?php
    $mhs = array(
        array("Aldi","12345","Tabanan"),
        array("Ngurah","23456","Tabanan"),
        array("Adit","34567","Bangli"),
        array("Marcel","45678","Negara"),
    );

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($mhs);
