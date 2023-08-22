<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

    <form method="post">
        <label for="nilai_mtk">Nilai Matematika:</label>
        <input type="number" name="nilai_mtk" required><br>

        <label for="nilai_dpk">Nilai Dasar Pengetahuan:</label>
        <input type="number" name="nilai_dpk" required><br>
    
        <label for="nilai_indo">Nilai Bahasa Indonesia:</label>
        <input type="number" name="nilai_indo" required><br>

        <label for="nilai_ingg">Nilai Bahasa Inggris:</label>
        <input type="number" name="nilai_ingg" required><br>

        <label for="nilai_agama">Nilai Agama:</label>
        <input type="number" name="nilai_agama" required><br>

        <label for="kehadiran">Persentase Kehadiran:</label>
        <input type="number" name="kehadiran" required><br>

        <input type="submit" value="cari">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai_mtk = intval($_POST["nilai_mtk"]);
        $nilai_dpk = intval($_POST["nilai_dpk"]);
        $nilai_indo = intval($_POST["nilai_indo"]);
        $nilai_ingg = intval($_POST["nilai_ingg"]);
        $nilai_agama = intval($_POST["nilai_agama"]);
        $kehadiran = intval($_POST["kehadiran"]);

        $rata_rata = ($nilai_mtk + $nilai_dpk + $nilai_indo + $nilai_ingg + $nilai_agama) / 5;

        if ($rata_rata >= 475 && $kehadiran == 100 && $jumlah_siswa == 15) {
            echo "Hoki";
        } else {
            echo "NT";
        }
    }
    ?>
</body>
</html>
