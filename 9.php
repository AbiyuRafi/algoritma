<?php

$no_pegawai ;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urut;
$tanggal_lahir;

if (isset($_POST['submit'])) {
    $no_pegawai = $_POST['nomer'];

    if (strlen($no_pegawai < 11)) {
        echo "No pegawai ga sesuai";
    }else{
        echo "p";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>No Pegawai</td>
                <td><input type="number" name="nomer"></td>
            </tr>
            <tr>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>

