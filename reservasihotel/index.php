<?php
require_once 'function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" width="50" height="50">
                Reservasi Hotel
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-home"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i> Hubungi Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help.php"><i class="fas fa-question-circle"></i> Bantuan</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <br> <br> <br>
    <!-- Slide Menu -->
    <div class="slide-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="logo.png" alt="Logo" width="200" height="200">
                </div>
                <div class="col-md-6">
                    <h2>Reservasi Hotel </h2>
                    <p>Silakan untuk memilih tempat istirahat yang nyaman dengan pemandangan yang indah,</p>
                    <p>Kami sudah siapkan beberapa hotel bintang 5 untuk anda</p>
                </div>
            </div>
        </div>
    </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Hotel</th>
                            <th>Lokasi</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="1.jpg" class="img-thumbnail" alt="Hotel 1"></td>
                            <td>Alila Purnama Hotel</td>
                            <td>Indonesia</td>
                            <td>Rp 100.000</td>
                            <td><a href="hotel1.php" class="btn btn-primary">Pilih</a></td>
                        </tr>
                        <tr>
                            <td><img src="2.jpg" class="img-thumbnail" alt="Hotel 2"></td>
                            <td>Amanjiwo Resort Borobudur</td>
                            <td>Indonesia</td>
                            <td>Rp 150.000</td>
                            <td><a href="hotel2.php" class="btn btn-primary">Pilih</a></td>
                        </tr>
                        <!-- Add more hotel rows here as needed -->
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Hotel</th>
                            <th>Lokasi</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="3.jpg" class="img-thumbnail" alt="Hotel 3"></td>
                            <td>DoubleTree by Hilton Jakarta</td>
                            <td>Indonesia</td>
                            <td>Rp 120.000</td>
                            <td><a href="hotel3.php" class="btn btn-primary">Pilih</a></td>
                        </tr>
                        <tr>
                            <td><img src="4.jpg" class="img-thumbnail" alt="Hotel 2"></td>
                            <td>Metland Hotel Cirebon</td>
                            <td>Indonesia</td>
                            <td>Rp 150.000</td>
                            <td><a href="hotel4.php" class="btn btn-primary">Pilih</a></td>
                        </tr>
                        <!-- Add more hotel rows here as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; Kelompok 6</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html> 