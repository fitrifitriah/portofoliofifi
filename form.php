<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Interactive Portofolio</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="container">
            <h1 style="text-align: center;">Achievement</h1>
            <hr>
            <form method="POST" action="Back4.php">
                <table>
                    <tr>
                        <td>Nama Prestasi</td>
                        <td>:<input name="prestasi" type="text" id="prestasi" required=""></td>
                    </tr>
                    <tr>
                        <td>Tingkat </td>
                        <td>:<input name="tingkat" type="text" id="tingkat" required=""></td>
                    </tr>
                    <tr>
                        <td>Tahun </td>
                        <td>:<input name="tahun" type="text" id="tahun" required=""></td>
                    </tr>
                </table>
                
                <hr>
                <input type="submit" class="btn btn-primary" name="submit" value="Proses">&emsp;<input type="reset" class="btn btn-primary" name="reset" value="Reset">&emsp;<input type="button" class="btn btn-info" value="Lihat Data" onclick="location.href='tampil.php';">
                </hr>
            </form>
        </div>
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>
    
   