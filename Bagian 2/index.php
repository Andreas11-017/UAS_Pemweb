<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server-side Programming</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi data dari formulir
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $nim = test_input($_POST["nim"]);
    $check = isset($_POST["check"]) ? "Checked" : "Not Checked";
    $radio = isset($_POST["radio"]) ? test_input($_POST["radio"]) : "Not Selected";

    // Menampilkan hasil pengolahan data
    echo "<h2>Form Data Processed:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>NIM: $nim</p>";
    echo "<p>Check: $check</p>";
    echo "<p>Radio: $radio</p>";

    // Menampilkan jenis browser dan alamat IP pengguna
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $ip_address = $_SERVER['REMOTE_ADDR'];

    echo "<p>Browser: $browser</p>";
    echo "<p>IP Address: $ip_address</p>";

    // Simpan data ke basisdata (simulasi)
    // Di sini Anda dapat menyimpan data ke basisdata sesuai kebutuhan proyek
    // Misalnya, menggunakan MySQLi atau PDO
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
</body>
</html>
