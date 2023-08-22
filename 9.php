<?php

$no_pegawai;
$no_golongan;
$tanggal;
$bulan;
$tahun;
$no_urut;
$tanggal_lahir;

if (isset($_POST['submit'])) {
    $no_pegawai = $_POST['nomer'];

    if (strlen($no_pegawai) < 11) {
        echo "No pegawai tidak sesuai";
    } else {
        $no_golongan = strtr($no_pegawai, 0, 1);
        $tanggal = strtr($no_pegawai, 1, 2);
        $bulan = strtr($no_pegawai, 3, 2);
        $tahun = strtr($no_pegawai, 5, 4);
        $no_urut = strtr($no_pegawai, 9, 2);
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
                <td><input type="text" name="nomer" value=></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
