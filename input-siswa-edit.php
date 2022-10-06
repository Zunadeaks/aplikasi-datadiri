<?php
    include('./input-config.php');
    $no = 1;
    $tabledata = "";
    $data = mysqli_query($mysql, " SELECT * FROM siswa_nilai ");
    while($row = mysqli_fetch_array($data)) {
        $tabledata .="
        <tr>
        <td>".$row['nis']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['kelas']."</td>
        <td>".$row['kehadiran']."</td>
        <td>".$row['Tugas']."</td>
        <td>".$row['UTS']."</td>
        <td>".$row['UAS']."</td>
        <td>".$row['kehadiran']+$row["Tugas"]+$row["UTS"]+$row["UAS"]"</td>
        </tr>";
        $no++;
    }   

echo "<table cellpadding=5 border=1 cellspacing=0>
<tr>
<th> NIS </th>
<th> Nama </th>
<th> Kelas </th>
<th> Kehadiran </th>
<th> Tugas </th>
<th> UTS </th>
<th> UAS </th>
<th> Nilai Akhir </th>
</tr>
$tabledata
</table>";
?>