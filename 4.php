<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <form action="" method="post">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>:</td>
                <td><input type="number" name="gaji"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </form>
    </table>

    <?php

    if (isset($_POST['submit'])) {
        $nama = $_POST["name"];
        $gajiPokok = $_POST['gaji'];

        $tunjangan = (20 * $gajiPokok) / 100;
        $pjk = (15 * ($gajiPokok + $tunjangan)) / 100;
        $gajibersih =  $gajiPokok + $tunjangan - $pjk;

        echo "Nama : " . $nama . "<br>";
        echo "Tunjangan Jabatan: Rp. " . number_format($tunjangan) . "<br>";
        echo "Pajak PJK: Rp. " . number_format($pjk) . "<br>";
        echo "Total Gaji Bersih: Rp. " . number_format($gajibersih) . "<br>";
    }
    ?>
</body>

</html>