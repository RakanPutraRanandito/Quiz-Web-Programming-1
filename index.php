<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Mahasiswa</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 30px; background-color: #f4f7f6; }
        .container { background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 450px; margin: auto; }
        h2 { color: #333; text-align: center; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; }
        input[type="text"], select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        input[type="submit"] { width: 100%; padding: 12px; background-color: #007BFF; border: none; color: white; font-size: 16px; border-radius: 5px; cursor: pointer; transition: 0.3s; }
        input[type="submit"]:hover { background-color: #0056b3; }
        .hasil { margin-top: 25px; padding: 15px; background-color: #e9ecef; border-radius: 5px; border-left: 5px solid #007BFF; }
    </style>
</head>
<body>

<div class="container">
    <h2>Input Data Mahasiswa</h2>
    
    <form method="post" action="">
        <div class="form-group">
            <label>NIM:</label>
            <input type="text" name="nim" required placeholder="Contoh: 19252290">
        </div>

        <div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="kelas" required placeholder="Contoh: 19.2A.12">
        </div>

        <div class="form-group">
            <label>Matakuliah:</label>
            <input type="text" name="matakuliah" required placeholder="Nama Matakuliah">
        </div>

        <div class="form-group">
            <label>Jurusan:</label>
            <select name="jurusan" required>
                <option value="">-- Pilih Jurusan --</option>
                <option value="Sistem Informasi">Sistem Informasi (SI)</option>
                <option value="Teknik Informatika">Teknik Informatika (TI)</option>
            </select>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
        </div>

        <input type="submit" value="Kirim Data">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST['nim'];
        $kelas = $_POST['kelas'];
        $matakuliah = $_POST['matakuliah'];
        $jurusan = $_POST['jurusan'];
        $jk = $_POST['jenis_kelamin'];

        echo "<div class='hasil'>";
        echo "<h3>Hasil Input:</h3>";
        echo "NIM: <b>$nim</b><br>";
        echo "Kelas: $kelas<br>";
        echo "Matakuliah: $matakuliah<br>";
        echo "Jurusan: $jurusan<br>";

        // Logika Cek NIM Ganjil/Genap
        if (is_numeric($nim)) {
            if ((int)$nim % 2 == 0) {
                echo "Status NIM: <b style='color: blue;'>GENAP</b>";
            } else {
                echo "Status NIM: <b style='color: red;'>GANJIL</b><br>";
                echo "Jenis Kelamin: $jk";
            }
        } else {
            echo "<i style='color: orange;'>NIM harus berupa angka untuk cek status.</i>";
        }
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
