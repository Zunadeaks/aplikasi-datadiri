<form action="post.php" method="POST">
    <input type="text" name="namalengkap" placeholder="Ex. Indra El"/><br>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 1"/><br>
    <input type="number" name="nis" placeholder="Ex. 123456 "/><br>
    <input type="submit" name="simpan" value="Simpan Data"/><br>
</form>

<?php
      if( isset($_POST["simpan"]) ){
        echo "<hr>";

        $namalengkap = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $nis = $_POST["nis"];

        echo "Nama Lengkap : " .$namalengkap . "<br>";
        echo "kelas : " . $kelas . "<br>";
        echo "nis : " . $nis . "<br>";
      }
?>