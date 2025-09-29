<?php
include "aksi.php";

if(isset($_POST["register"])){
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    
    $sql = "INSERT INTO form (nama, alamat) VALUES
    ('$nama', '$alamat')";

    if($db->query($sql)) {
        header("location: dashboard_ajuan.php");
    }
    $db->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengajuan layanan</title>
</head>
<body>
    <h3 class="form">FORMULIR LAYANAN</h3>
    <form action="ajukanlayanan.php" method="POST">
        <table>
            <tr>
                <td><input type="text" placeholder="Nama Lengkap" name="nama"/></td>
            </tr>

            <tr>
                <td><input type="text" placeholder="Alamat" name="alamat"/></td>
            </tr>

             <tr>
                <td><button type="submit" name="register">Kirim</button></td>
            </tr>
        </table>
    </form>
</body>
</html>