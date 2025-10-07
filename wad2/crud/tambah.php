<?php
include_once("koneksi.php");

if (isset($_POST['Proses_Submit'])) {
    $kelompok       = $_POST['kelompok'];
    $nama_lengkap   = $_POST['nama_lengkap'];
    $nim            = $_POST['nim'];
    $email          = $_POST['email'];
    $nomor_kontak   = $_POST['nomor_kontak'];
    $program_studi  = $_POST['program_studi'];

    $sql = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa 
        (kelompok, nama_lengkap, nim, email, nomor_kontak, program_studi)
        VALUES ('$kelompok', '$nama_lengkap', '$nim', '$email', '$nomor_kontak', '$program_studi')");

    echo "Mahasiswa berhasil ditambahkan. <a href='tampil.php'>Lihat Data Mahasiswa</a>";
}
?>

<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <hr>

    <form action="tambah.php" method="post">
        <table border="1" width="70%" align="center" cellspacing="0" cellpadding="5">
            <tr>
                <td>Masukkan Kelompok</td>
                <td><input type="text" name="kelompok" placeholder="Masukkan Kelompok"></td>
            </tr>
            <tr>
                <td>Masukkan Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap"></td>
            </tr>
            <tr>
                <td>Masukkan NIM</td>
                <td><input type="text" name="nim" placeholder="Masukkan NIM"></td>
            </tr>
            <tr>
                <td>Masukkan Nomor Kontak</td>
                <td><input type="text" name="nomor_kontak" placeholder="Masukkan Nomor Kontak"></td>
            </tr>
            <tr>
                <td>Masukkan Email</td>
                <td><input type="text" name="email" placeholder="Masukkan Email"></td>
            </tr>
            <tr>
                <td>Masukkan Program Studi</td>
                <td><input type="text" name="program_studi" placeholder="Masukkan Program Studi"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="Proses_Submit" value="Tambah Data">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>