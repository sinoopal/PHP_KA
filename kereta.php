<?php

    include_once('connection.php');
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $pergi = $_POST['pergi'];
    $datang = $_POST['datang'];
    $rute = $_POST['rute'];
    $tipe = $_POST['tipe'];

    $statement = $conn->prepare('INSERT INTO kereta (kode, nama, nik, pergi, datang, rute, tipe)
                                            VALUES (:kode, :nama, :nik, :pergi, :datang, :rute, :tipe)');
                                
    $statement->execute([
        'kode' => $kode,
        'nama' => $nama,
		'nik' => $nik,
        'pergi' => $pergi,
        'datang' => $datang,
        'rute' => $rute,
        'tipe' => $tipe
    ]);

    header('location: index.php');