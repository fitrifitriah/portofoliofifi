<!DOCTYPE html>
<html lang="en">

<head>
    <title>Interactive Portofolio</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        require_once('conn.php');
        ?>
        
        <h1 style="text-align: center;">Achievement</h1>
        <hr> 
        <input type="button" class="btn btn-info" value="Masukkan Data Baru" onclick="location.href='form.php';">&ensp;
        <input type="button" class="btn btn-info" value="Kembali" onclick="location.href='index.php';">
        <hr>
        <center>

            <table class="table2">
                <tr>
                    <th>Prestasi</th>
                    <th>Tingkat</th>
                    <th>Tahun</th>
                    <th colspan="2">Perbarui</th>
                </tr>
                <?php
                if (!empty($result)) {
                    foreach ($result as $row) {
                ?>
                        <tr>
                            <td><?php echo $row['Prestasi']; ?></td>
                            <td><?php echo $row['Tingkat']; ?></td>
                            <td><?php echo $row['Tahun']; ?></td>
                            <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
                            <td><a href="delete.php?id=<?php echo $row['id']; ?>">Hapus</a></td>
                        </tr>

                <?php
                    }
                }
                ?>
            </table>
        </center>
    </div>

</body>
<script src="js/bootstrap.min.js"></script>

</html>