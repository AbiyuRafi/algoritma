<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Juara Kelas</title>
</head>

<body>
    <h2>Pencarian Juara Kelas</h2>

    <?php
    $students = array();

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $mtk = $_POST['mtk'];
        $indo = $_POST['indo'];
        $ingg = $_POST['ingg'];
        $dpk = $_POST['dpk'];
        $agama = $_POST['agama'];
        $kehadiran = $_POST['kehadiran'];

        $totalNilai = $mtk + $indo + $ingg + $dpk + $agama;

        $students[] = array(
            'nama' => $nama,
            'nilai' => array(
                'mtk' => $mtk,
                'indo' => $indo,
                'ingg' => $ingg,
                'dpk' => $dpk,
                'agama' => $agama
            ),
            'kehadiran' => $kehadiran,
            'totalNilai' => $totalNilai
        );

        if (count($students) >= 15) {
            $highestTotal = 0;
            $juaraName = '';

            foreach ($students as $student) {
                if ($student['totalNilai'] >= 475 && $student['kehadiran'] == 100) {
                    if ($student['totalNilai'] > $highestTotal) {
                        $highestTotal = $student['totalNilai'];
                        $juaraName = $student['nama'];
                    }
                }
            }

            if ($juaraName !== '') {
                echo "<h3>Hasil Pencarian Juara Kelas</h3>";
                echo "Siswa dengan nilai total tertinggi yang memenuhi kriteria juara kelas adalah: $juaraName";
            } else {
                echo "<h3>Hasil Pencarian Juara Kelas</h3>";
                echo "<p>Tidak ada siswa yang memenuhi kriteria untuk menjadi juara kelas.</p>";
            }
        }
    }
    ?>

    <form method="POST" action="">
        <label for="nama">Nama Siswa:</label>
        <input type="text" name="nama" required><br>

        <h3>Input Nilai dan Kehadiran</h3>
        <label for="mtk">Nilai Matematika:</label>
        <input type="number" name="mtk" required><br>

        <label for="indo">Nilai Bahasa Indonesia:</label>
        <input type="number" name="indo" required><br>

        <label for="ingg">Nilai Bahasa Inggris:</label>
        <input type="number" name="ingg" required><br>

        <label for="dpk">Nilai DPK:</label>
        <input type="number" name="dpk" required><br>

        <label for="agama">Nilai Agama:</label>
        <input type="number" name="agama" required><br>

        <label for="kehadiran">Kehadiran (dalam %):</label>
        <input type="number" name="kehadiran" required><br>

        <input type="submit" value="Tambah Siswa" name="submit">
    </form>

    <?php if (!empty($students)) : ?>
        <h3>Daftar Siswa dan Nilai</h3>
        <ul>
            <?php foreach ($students as $student) : ?>
                <li>
                    <?php echo $student['nama']; ?>:
                    MTK(<?php echo $student['nilai']['mtk']; ?>),
                    INDO(<?php echo $student['nilai']['indo']; ?>),
                    INGG(<?php echo $student['nilai']['ingg']; ?>),
                    DPK(<?php echo $student['nilai']['dpk']; ?>),
                    Agama(<?php echo $student['nilai']['agama']; ?>)
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>

</html>