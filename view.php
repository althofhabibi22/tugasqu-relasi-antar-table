<?php
    include 'koneksi.php';

    $query = "SELECT * FROM tb_mahasiswa";
    $result = mysqli_query($koneksi , $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border= '1' cellpadding= '8'>";
        echo  "<tr><th>No</th><th>Nama</th><th>Alamat</th><th>Nomor Handphone</th></tr>";

        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['no'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "<td>" . $row['nomerhp'] . "</td>";
            echo "<tr>";
        }

        echo "</table>";
    } else{
        echo "tidak ada data mahasiswa";
    }
?>