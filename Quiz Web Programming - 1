# Quiz-Web-Programming-1
<!DOCTYPE html>
<html>
<head>

    <title>Form Input Data Mahasiswa (19252290)</title>

</head>

<body>

    <h2>Form Input Data Mahasiswa - Web Programming (19252290)</h2>

    <form method="post" action="">

        Nim: <input type="text" name="nim" value="19252290"><br><br>

        Kelas: <input type="text" name="kelas" value="19.2A.12"><br><br>

        Matakuliah: <input type="text" name="matakuliah" value="Web Programming"><br><br>

        Jurusan: 

        <select name="jurusan">

            <option value="SI">SI</option>

            <option value="TI">TI</option>

        </select><br><br>

        Jenis Kelamin:

        <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki

        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br><br>

        <input type="submit" value="Submit">

    </form>



    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo "<h3>Data yang Diinput:</h3>";

        echo "NIM: " . $_POST['nim'] . "<br>";

        echo "Kelas: " . $_POST['kelas'] . "<br>";

        echo "MataKuliah: " . $_POST['matakuliah'] . "<br>";

        echo "Jurusan: " . $_POST['jurusan'] . "<br>";

        
        // Cek genap atau ganjil
        $nim = (int)$_POST['nim'];
        if ($nim % 2 == 0) {
            echo "Status NIM: <strong>GENAP</strong><br>";
        } else {
            echo "Status NIM: <strong>GANJIL</strong><br>";
            echo "Jenis Kelamin: " . $_POST['jenis_kelamin'] . "<br>";
        }

    }

    // Tampilkan status NIM default
    echo "<hr>";
    echo "<h3>Status NIM Default (19252290):</h3>";
    $default_nim = 19252290;
    if ($default_nim % 2 == 0) {
        echo "NIM 19252290 adalah: <strong style='color: blue;'>GENAP</strong>";
    } else {
        echo "NIM 19252290 adalah: <strong style='color: red;'>GANJIL</strong><br>";
        echo "Jenis Kelamin: <strong style='color: green;'>Laki-laki</strong>";
    }

    ?>

</body>

</html>
