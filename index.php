<?php include_once("connection.php"); ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penumpang Kereta Api</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<button class="tambah"><a href="create.php">Add</a></button>

<h2>DATA PENUMPANG KERETA API INDONESIA</h2>
<table border="1" cellspacing="0" cellpadding="10" >
	<thead>
    <tr>
        <th>No</th>
        <th>Seat</th>
        <th>Passenger Name</th>
        <th>ID Passenger</th>
        <th>Departure</th>
        <th>Arrival</th>
        <th>Train Route</th>
        <th>Type</th>
        <th>Option</th>
    </tr>
    </thead>
    <?php $query = $conn->query('SELECT * FROM kereta'); ?> 

    <?php if($query->rowCount() > 0): ?>
        <?php 
            $no = 1; 
            foreach($query->fetchAll(PDO::FETCH_ASSOC) AS $row):
        ?>  
            <tr>
                <td align="center"> <?php echo $no; ?>. </td>
                <td> <?php echo $row['kode']; ?> </td>
                <td> <?php echo $row['nama']; ?> </td>
                <td> <?php echo $row['nik']; ?> </td>
                <td> <?php echo $row['pergi']; ?> </td>
                <td> <?php echo $row['datang']; ?> </td>
                <td> <?php echo $row['rute']; ?> </td>
                <td> <?php echo $row['tipe']; ?> </td>
                <td> 
                    <button class="tombol"><a href="edit.php?kode=<?php echo $row['kode']; ?>">Edit</a></button>
                    <button class="tombolhapus"><a href="delete.php?kode=<?php echo $row['kode']; ?>">Delete</a></button>
                </td>
            </tr>
        <?php 
            $no++; 
            endforeach; 
        ?>
    <?php else: ?>        
        <tr>
            <th colspan="9">Data penumpang kosong.</th>
        </tr>		
    <?php endif; ?>

</table>
</body>
</html>





