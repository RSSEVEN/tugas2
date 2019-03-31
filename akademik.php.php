<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TUGAS 2 - JSON </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <h3>Menampilan Data Mahasiswa</h3>

            <?php
            $conn = mysql_connect("localhost", "id8199285_unisbank", "12345678910") or die("Koneksi Gagal");
            mysql_select_db("id8199285_mahasiswa", $conn);
            $qry = mysql_query("select*from mahasiswa", $conn) or die("Query Nga Valid");

            while ($row = mysql_fetch_array($qry)) {
                echo   " nim = " . $row["nim"] . " - ";
                echo  " nama = " . $row["nama"] . " - ";
                echo  " prodi = " . $row["prodi"] . "<br>";
            }

            ?>
        </div>
        <div class="row">
            <h3>Menampilan Data Matakuliah</h3>

            <?php
            $conn = mysql_connect("localhost", "id8199285_unisbank", "12345678910") or die("Koneksi Gagal");
            mysql_select_db("id8199285_mahasiswa", $conn);
            $qry = mysql_query("select*from matakuliah", $conn) or die("Query Nga Valid");

            while ($row = mysql_fetch_array($qry)) {
                echo   " kode matakuliah = " . $row["kdmk"] . " - ";
                echo  " nama matakuliah = " . $row["nmmk"] . " - ";
                echo  " sks = " . $row["sks"];
                echo  " prodi = " . $row["prodi"] . "<br>";
            }

            ?>
        </div>
        <div class="row">
            <h3>Menampilan Data Nilai</h3>

            <?php
            $conn = mysql_connect("localhost", "id8199285_unisbank", "12345678910") or die("Koneksi Gagal");
            mysql_select_db("id8199285_mahasiswa", $conn);
            $qry = mysql_query("select*from nilai", $conn) or die("Query Nga Valid");

            while ($row = mysql_fetch_array($qry)) {
                echo   "tahun ajaran = " . $row["thakd"] . " - ";
                echo  " nim = " . $row["nim"] . " - ";
                echo  " kode matakuliah = " . $row["kdmk"];
                echo  " nilai = " . $row["nilai"] . "<br>";
            }

            ?>
        </div>
        <div class="row">
            <h3>Menampilan Data Customer</h3>

            <?php
            $conn = mysql_connect("localhost", "id8199285_unisbank", "12345678910") or die("Koneksi Gagal");
            mysql_select_db("id8199285_mahasiswa", $conn);
            $qry = mysql_query("select*from customer", $conn) or die("Query Nga Valid");

            while ($row = mysql_fetch_array($qry)) {
                echo   "id customer = " . $row["id_customer"] . " - ";
                echo  " username = " . $row["username"] . " - ";
                echo  " password = " . $row["password"];

                echo   " nama = " . $row["nama"] . " - ";
                echo  " umur = " . $row["umur"] . " - ";
                echo  " alamat = " . $row["alamat"];

                echo   " telpon = " . $row["telp"] . " - ";
                echo  " email = " . $row["email"] . " - ";
                echo  " tanggal lahir = " . $row["tgl_lahir"];

                echo   " kode pos= " . $row["kode_pos"] . " - ";
                echo  " nama ibu = " . $row["nama_ibu_k"] . " - ";

                echo  " gender = " . $row["gender"] . "<br>";
            }

            ?>
        </div>
    </div>






    <script src="js/jquery.min.js"></script>
    <script src=" js/bootstrap.min.js"></script>
</body>


</html> 