<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket Kereta Api</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>TIKET KERETA API INDONESIA</h2>
<form action="kereta.php" method="post">
    <input type="text" name="kode" placeholder="Masukkan Kode Tiket"> <br/>
    <input type="text" name="nama" placeholder="Masukkan Nama"> <br/>
    <input type="text" name="nik" placeholder="Masukkan NIK"> <br/>
    <input type="datetime-local" name="pergi" placeholder="Stasiun Asal"> <br/>
    <input type="datetime-local" name="datang" placeholder="Stasiun Asal"> <br/>
    <select name='rute'><br/>
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
    <button>Simpan</button>
</form>
</body>
</html>
