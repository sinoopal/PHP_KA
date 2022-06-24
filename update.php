<?php

    include_once('connection.php');

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $nik  = $_POST['nik' ];
    $pergi = $_POST['pergi'];
    $datang = $_POST['datang'];
    $rute = $_POST['rute'];
    $tipe = $_POST['tipe'];

    $statement = $conn->prepare('UPDATE kereta SET kode =:kode,
                                                nama=:nama, 
	                                            nik =:nik,
                                                pergi=:pergi,
                                                datang=:datang,
                                                rute=:rute,
                                                tipe=:tipe
                                                WHERE kode =:kode ');                            
    $statement->execute([
        'kode' => $kode,
        'nama' => $nama,
		'nik'  => $nik,
        'pergi' => $pergi,
        'datang' => $datang,
        'rute' => $rute,
        'tipe' => $tipe,
        'kode' => $kode
    ]);

    header('location: index.php');