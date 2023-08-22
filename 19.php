<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Hitung Penghasilan Penjualan Tiket Bioskop</h1>
    <form method="post" action="">
        <label for="vip">Jumlah Tiket VIP Terjual:</label>
        <input type="number" name="vip" id="vip" required><br><br>
        
        <label for="eksekutif">Jumlah Tiket Eksekutif Terjual:</label>
        <input type="number" name="eksekutif" id="eksekutif" required><br><br>
        
        <label for="ekonomi">Jumlah Tiket Ekonomi Terjual:</label>
        <input type="number" name="ekonomi" id="ekonomi" required><br><br>
        
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $vipSold = $_POST["vip"];
        $eksekutifSold = $_POST["eksekutif"];
        $ekonomiSold = $_POST["ekonomi"];
        
        $vip = 100; // Harga tiket VIP
        $ekskutif = 75; // Harga tiket Eksekutif
        $ekonomi = 50; // Harga tiket Ekonomi
        
        // Menghitung keuntungan per kelas
        $vipProfit = calculateProfit($vipSold, $vip);
        $eksekutifProfit = calculateProfit($eksekutifSold, $ekskutif);
        $ekonomiProfit = calculateProfit($ekonomiSold, $ekonomi);
        
        $totalProfit = $vipProfit + $eksekutifProfit + $ekonomiProfit;
        
        $totalTicketsSold = $vipSold + $eksekutifSold + $ekonomiSold;
        
        echo "<h2>Keuntungan per Kelas Tiket:</h2>";
        echo "VIP: $vipProfit<br>";
        echo "Eksekutif: $eksekutifProfit<br>";
        echo "Ekonomi: $ekonomiProfit<br>";
        
        echo "<h2>Keuntungan Keseluruhan:</h2>";
        echo "Total Keuntungan: $totalProfit<br>";
        
        echo "<h2>Jumlah Tiket per Kelas dan Total Tiket Terjual:</h2>";
        echo "VIP: $vipSold tiket<br>";
        echo "Eksekutif: $eksekutifSold tiket<br>";
        echo "Ekonomi: $ekonomiSold tiket<br>";
        echo "Total Tiket Terjual: $totalTicketsSold tiket";
    }

    function calculateProfit($sold, $price) {
        $profitPercentage = 0;
        if ($sold >= 35) {
            $profitPercentage = 0.25;
        } elseif ($sold >= 20) {
            $profitPercentage = 0.15;
        } else {
            $profitPercentage = 0.05;
        }
        
        return $sold * $price * $profitPercentage;
    }
    ?>
</body>
</html>

