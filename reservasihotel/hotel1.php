<?php
require_once 'function.php';

$nama_hotel = "Alila Purnama Hotel"; // Tambahkan variabel dengan nama hotel

// Periksa apakah formulir pembayaran telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pembeli = $_POST['nama'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $tanggal_pembelian = date('Y-m-d');

    // Panggil fungsi savePayment() untuk menyimpan data pembayaran ke database
    savePayment($nama_pembeli, $checkin, $checkout, $tanggal_pembelian, $nama_hotel);

    // Redirect ke halaman konfirmasi pembayaran atau halaman terima kasih
    header('Location: confirmation.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hotel 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <br> <br> <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="1.jpg" class="img-fluid" alt="Hotel 1">
            </div>
            <div class="col-md-6">
                <h2><?php echo $nama_hotel; ?></h2> <!-- Tampilkan nama hotel -->
                <p>
                    Selamat datang di <?php echo $nama_hotel; ?>! Hotel kami menawarkan fasilitas mewah dan pelayanan yang istimewa.
                </p>
                <p>
                    Fasilitas:
                    <ul>
                        <li>Kolam renang</li>
                        <li>Restoran dengan masakan lokal dan internasional</li>
                        <li>Spa dan pusat kebugaran</li>
                        <li>Ruang pertemuan dan acara</li>
                        <li>Wi-Fi gratis</li>
                    </ul>
                </p>
                <p>
                    Nikmati liburan yang menyenangkan di <?php echo $nama_hotel; ?>. Kami menjamin kenyamanan dan kepuasan Anda.
                </p>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="nama">Nama Pembeli:</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="checkin">Check-in:</label>
                        <input type="date" id="checkin" name="checkin" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check-out:</label>
                        <input type="date" id="checkout" name="checkout" class="form-control" required>
                    </div>
                    <input type="hidden" name="hotel" value="<?php echo $nama_hotel; ?>"> <!-- Tambahkan input hidden dengan nilai nama hotel -->
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>

                <a href="index.php" class="btn btn-secondary mt-3">Back to Home</a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
