<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Confirmation</h2>
                <p>Terima kasih atas pembayaran Anda!</p>
                <p>Pembayaran Anda telah berhasil diproses.</p>
                <p>Anda dapat melihat rincian pembayaran di bawah ini:</p>
                <ul>
                    <li>Nama Pembeli: <?php echo isset($_GET['nama']) ? $_GET['nama'] : ''; ?></li>
                    <li>Check-in: <?php echo isset($_GET['checkin']) ? $_GET['checkin'] : ''; ?></li>
                    <li>Check-out: <?php echo isset($_GET['checkout']) ? $_GET['checkout'] : ''; ?></li>
                    <li>Tanggal Pembelian: <?php echo isset($_GET['tanggal_pembelian']) ? $_GET['tanggal_pembelian'] : ''; ?></li>
                    <li>Nama Hotel: <?php echo isset($_GET['hotel']) ? $_GET['hotel'] : ''; ?></li> <!-- Tambahkan rincian Nama Hotel -->
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
