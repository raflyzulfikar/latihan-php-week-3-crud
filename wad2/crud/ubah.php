<?php  
include_once("koneksi.php");  

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("Error: ID tidak ditemukan di URL!");
}

// Ambil data berdasarkan ID
$sql = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa WHERE id='$id'");  
$data = mysqli_fetch_array($sql);

$kelompok       = $data['kelompok'];  
$nama_lengkap   = $data['nama_lengkap'];  
$nim            = $data['nim'];  
$email          = $data['email'];  
$nomor_kontak   = $data['nomor_kontak'];  
$program_studi  = $data['program_studi'];  

// Jika tombol update ditekan
if (isset($_POST['Proses_Update'])) {  
    $id             = $_POST['id'];  
    $kelompok       = $_POST['kelompok'];  
    $nama_lengkap   = $_POST['nama_lengkap'];  
    $nim            = $_POST['nim'];  
    $email          = $_POST['email'];  
    $nomor_kontak   = $_POST['nomor_kontak'];  
    $program_studi  = $_POST['program_studi'];  

    $sql = mysqli_query($koneksi, "UPDATE tbl_mahasiswa SET 
        kelompok='$kelompok',
        nama_lengkap='$nama_lengkap',
        nim='$nim',
        email='$email',
        nomor_kontak='$nomor_kontak',
        program_studi='$program_studi'
        WHERE id='$id'");

    header("Location:tampil.php");
}
?>  

<html>  
<head>  
    <title>Ubah Data Mahasiswa</title>  
</head>  
<body>  
    <h1>Ubah Data Mahasiswa</h1>  
    <hr>  

    <form action="ubah.php?id=<?php echo $id; ?>" method="post">  
        <table width="100%" border="1">  
            <tr>  
                <td>Masukkan Kelompok</td>  
                <td><input type="text" name="kelompok" value="<?php echo $kelompok; ?>"></td>  
            </tr>  
            <tr>  
                <td>Masukkan Nama Lengkap</td>  
                <td><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>"></td>  
            </tr>  
            <tr>  
                <td>Masukkan NIM</td>  
                <td><input type="text" name="nim" value="<?php echo $nim; ?>"></td>  
            </tr>  
            <tr>  
                <td>Masukkan Nomor Kontak</td>  
                <td><input type="text" name="nomor_kontak" value="<?php echo $nomor_kontak; ?>"></td>  
            </tr>  
            <tr>  
                <td>Masukkan Email</td>  
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>  
            </tr>  
            <tr>  
                <td>Masukkan Program Studi</td>  
                <td><input type="text" name="program_studi" value="<?php echo $program_studi; ?>"></td>  
            </tr>  
            <tr>  
                <td colspan="2" align="center">  
                    <input type="hidden" name="id" value="<?php echo $id; ?>">  
                    <input type="submit" name="Proses_Update" value="Ubah Data">  
                </td>  
            </tr>  
        </table>  
    </form>  
</body>  
</html>