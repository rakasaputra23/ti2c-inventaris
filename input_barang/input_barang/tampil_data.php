<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "inventory";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
            exit();
        }

        $sql = "SELECT * FROM barang";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Data Barang</h2>";
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Nama Barang</th><th>Harga</th><th>Stok</th><th>Nama pemasok</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nama_barang"] . "</td><td>" . $row["harga"] . "</td><td>" . $row["stok"] .  "</td><td>" . $row["nama_pemasok"] ."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "Tidak ada data barang";
        }

        


        mysqli_close($conn);
        ?>
    </div>
</body>
<nav>
        <a href="input_barang.html">[+] Tambah Baru</a>
    </nav>
</html>
