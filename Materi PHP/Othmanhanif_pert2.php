<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Nilai Ujian</title>
</head>

<body>
    <h2>Form Nilai Ujian</h2>
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Nilai Ujian:</label><br>
        <input type="number" name="nilai" required min="0" max="100"><br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Ambil data dari form
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $nilai = (int) $_POST['nilai'];
        
        // cek nilai ujian
        if ($nilai > 70) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }
        
        // Tampilkan hasil
        echo "<h3>Hasil Evaluasi</h3>";
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Nilai Ujian: $nilai <br>";
        echo "Status: <b>$status</b>";
    }
    ?>
</body>

</html>