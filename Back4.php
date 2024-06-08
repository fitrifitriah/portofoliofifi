<?php
require_once('conn.php'); 
$prestasi = $_POST['prestasi'];
$tingkat = $_POST['tingkat'];
$tahun = $_POST['tahun'];


$sql = "INSERT INTO `id19936598_prestasi` ('Prestasi','Tingkat','Tahun') VALUES ('0', '$prestasi', '$tingkat', '$tahun')";
// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css bootstrap -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Latest Achievement</title>
</head>

<body>
    <div class="container">
    <h1 style='text-align: center;'>Interactive Portofolio</h1><br>
    <table>
	<tr>
		<td>Nama Prestasi</td>
		<td>:</td>
		<td><?php echo $prestasi; ?></td>
	</tr>
	<tr> 
		<td>Tingkat</td>
		<td>:</td>
		<td><?php echo $tingkat; ?></td>
	</tr>
	<tr>
		<td>Tahun</td>
		<td>:</td>
		<td><?php echo $tahun; ?></td>
	</tr>
	<br>
	<input type="button" class="btn btn-info" value="Kembali" onclick="location.href='form.php';">&ensp;<input type="button" class="btn btn-info" value="Lihat Data" onclick="location.href='tampil.php';">
    </br>
    </table>
    </div>

    <script src="js/bootstrap.min.js"></script>
    </body>
        
</html>