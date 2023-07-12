<?php
session_start();

// Fungsi untuk membuat koneksi ke database
function connectDB()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reservasihotel";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Mengecek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    return $conn;
}

// Fungsi untuk menyimpan data pembayaran ke database
function savePayment($nama_pembeli, $checkin, $checkout, $tanggal_pembelian, $nama_hotel)
{
    // Membuat koneksi ke database
    $conn = connectDB();

    // Mengeksekusi query untuk menyimpan data pembayaran
    $sql = "INSERT INTO pembayaran (nama_pembeli, checkin, checkout, tanggal_pembelian, nama_hotel) VALUES ('$nama_pembeli', '$checkin', '$checkout', '$tanggal_pembelian', '$nama_hotel')";
    if ($conn->query($sql) === true) {
        // Mengarahkan pengguna ke halaman konfirmasi setelah pembayaran berhasil
        header('Location: confirmation.php?nama=' . urlencode($nama_pembeli) . '&checkin=' . urlencode($checkin) . '&checkout=' . urlencode($checkout) . '&tanggal_pembelian=' . urlencode($tanggal_pembelian) . '&hotel=' . urlencode($nama_hotel));
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}

// Fungsi untuk menyimpan data kontak ke database
function saveContact($name, $email, $pesan)
{
    // Membuat koneksi ke database
    $conn = connectDB();

    // Mengeksekusi query untuk menyimpan data kontak
    $sql = "INSERT INTO contacts (name, email, pesan) VALUES ('$name', '$email', '$pesan')";
    if ($conn->query($sql) === true) {
        return true;
    } else {
        return false;
    }

    // Menutup koneksi
    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Menyimpan data kontak ke database
    if (saveContact($name, $email, $pesan)) {
        echo "Pesan berhasil dikirim!";
        header("Location: index.php");
        exit();
    } else {
        echo "Terjadi kesalahan dalam mengirim pesan.";
    }
}

?>
