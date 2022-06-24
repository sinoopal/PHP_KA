<?php

    include_once('connection.php');

    $kode = $_GET['kode'];

    $statement = $conn->prepare('DELETE FROM kereta WHERE kode=:kode');                             
    $statement->execute([
        'kode' => $kode
    ]);

    header('location: index.php');