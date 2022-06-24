<?php 

    include_once("connection.php");

    $statement = $conn->prepare('SELECT * FROM kereta WHERE kode=:kode ');
    $statement->execute([
        'kode' => $_GET['kode']
    ]);
    
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tiket Kereta Api</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>EDIT TIKET KERETA API INDONESIA</h2>
<form action="update.php?kode=<?php echo $_GET['kode']; ?>" method="post">
    <input type="text" name="kode"    placeholder="Kode Tiket" value="<?php echo $user['kode']; ?>"> <br/>
    <input type="text" name="nama"    placeholder="Nama"       value="<?php echo $user['nama']; ?>"> <br/>
    <input type="text" name="nik"     placeholder="NIK"        value="<?php echo $user['nik']; ?>"> <br/>
    <input type="datetime-local" name="pergi" placeholder="Tanggal"    value="<?php echo $user['pergi']; ?>"> <br/>
    <input type="datetime-local" name="datang" placeholder="Tanggal"    value="<?php echo $user['datang']; ?>"> <br/>
    <select name='rute' ><br/>
		<option value='Stasiun Jatinegara → Stasiun Purwosari' selected='selected'>Stasiun Jatinegara → Stasiun Purwosari</option>
		<option value='Stasiun Solo Balapan → Stasiun Gambir'>Stasiun Solo Balapan → Stasiun Gambir</option>
		<option value='Stasiun Cirebon → Stasiun Kroya'>Stasiun Cirebon → Stasiun Kroya</option>
		<option value='Stasiun Cirebon → Stasiun Purwosari'>Stasiun Cirebon → Stasiun Purwosari</option>
	  </select><br/>
    <select name='tipe'><br/>
		<option value='Economy' selected='selected'>Economy</option>
		<option value='Business'>Business</option>
		<option value='Executive'>Executive</option>
		<option value='Luxury'>Luxury</option>
	  </select><br/>
    <button>Selesai</button>
</form>
</body>
</html>




