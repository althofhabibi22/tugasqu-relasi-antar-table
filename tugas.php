<?php
include 'koneksi.php';

$query = "SELECT
            m.nama,
            m.nim,
            m.prodi,
            mk.matkul,
            n.nilai
            FROM tb_nilai n
            JOIN tb_mhs m ON n.nim = m.nim
            JOIN tb_mtkl mk ON n.matkul = mk.matkul";

$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border = '1' cellpadding = '8' >";
    echo "<tr>
            <th>nama</th>
            <th>nim</th>
            <th>prodi</th>
            <th>matkul</th>
            <th>nilai</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['nim'] . "</td>";
        echo "<td>" . $row['prodi'] . "</td>";
        echo "<td>" . $row['matkul'] . "</td>";
        echo "<td>" . $row['nilai'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else{
    echo "tidak ada data mahasiswa";
}
?>