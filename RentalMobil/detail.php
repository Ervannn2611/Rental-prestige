<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagihan Pembayaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Tagihan Pembayaran</h2>
        <div class="bill">
        <?php
class Billing {
    private $nama;
    private $alamat;
    private $telp;
    private $sewa;
    private $pengambilan;
    private $pengembalian;
    private $tipe;
    private $isMember;  // Properti untuk menandai status anggota

    private $carPrices = [
        "mclaren" => 15000000,
        "ferari" => 17500000,
        "rubicon" => 14300000,
        "lamborghini" => 18700000,
        "bmw" => 16300000,
        "tesla" => 19200000
    ];

    public function __construct($nama, $alamat, $telp, $sewa, $pengambilan, $pengembalian, $tipe, $isMember) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->telp = $telp;
        $this->sewa = $sewa;
        $this->pengambilan = $pengambilan;
        $this->pengembalian = $pengembalian;
        $this->tipe = $tipe;
        $this->isMember = $isMember; // Set status anggota
    }

    public function calculateTotal() {
        if (array_key_exists($this->tipe, $this->carPrices)) {
            return $this->sewa * $this->carPrices[$this->tipe];
        } else {
            return 0; // Handle invalid car type
        }
    }

    public function calculateDiscountedTotal() {
        $total = $this->calculateTotal();
        // Tambahkan diskon 5% untuk anggota
        $discount = $this->isMember ? 0.05 * $total : 0; // 5% untuk anggota, 0% untuk non-anggota
        return $total - $discount;
    }

    public function generateInvoice() {
        $total = $this->calculateDiscountedTotal();
        $invoice = "<div class='bill-details'>";
        $invoice .= "<p><strong>Nama :</strong> $this->nama</p>";
        $invoice .= "<p><strong>Alamat :</strong> $this->alamat</p>";
        $invoice .= "<p><strong>No Telp :</strong> $this->telp</p>";
        $invoice .= "<p><strong>Paket :</strong> $this->sewa Hari</p>";
        $invoice .= "<p><strong>Tanggal Sewa :</strong> $this->pengambilan</p>";
        $invoice .= "<p><strong>Tanggal pengembalian :</strong> $this->pengembalian</p>";
        $invoice .= "<p><strong>Tipe Mobil :</strong> $this->tipe</p>";
        $invoice .= "<p><strong>Total Harga (setelah diskon " . ($this->isMember ? "5%" : "0%") . ") :</strong> Rp." . number_format($total) . "</p>";
        $invoice .= "</div>";
        return $invoice;
    }
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tentukan apakah pelanggan adalah anggota berdasarkan nama
    $isMember = ($_POST['nama'] == "Ervan" || $_POST['nama'] == "Acep" || $_POST['nama'] == "Rohim" || $_POST['nama'] == "Gatot");
    $billing = new Billing($_POST['nama'], $_POST['alamat'], $_POST['telp'], $_POST['sewa'], $_POST['pengambilan'], $_POST['pengembalian'], $_POST['tipe'], $isMember);
    echo $billing->generateInvoice();
}
?>


        </div>
        <center><div class="buton">
                <button  style="background-color: rgb(248, 1, 1);"><a href="rm.php">Kembali</a></button>
                <button onclick="window.print()"><a href="co.php">Pesan</a></button>
            </div></center>
    </div>
</body>
    <style>
   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.container {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.bill {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
}

.bill-details h3 {
    margin-bottom: 10px;
}

.bill-details p {
    margin: 5px 0;
    line-height: 1.5;
}

.total {
    margin-top: 20px;
    text-align: right;
}

.total p {
    margin-bottom: 5px;
}
.buton {
    text-align: center;
    margin-top: 20px;
}

.buton button {
    padding: 10px 20px;
    margin: 0 10px;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: #fff;
    font-size: 16px;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.buton button:hover {
    background-color: #ff9c08;
    opacity: 0.7;
}

.buton button a {
    color: inherit;
    text-decoration: none;
}

.buton button:first-child {
    margin-left: 0;
}

.buton button:last-child {
    margin-right: 0;
}


@media only screen and (max-width: 600px) {
    .container {
        padding: 10px;
    }
}


    </style>
</html>
