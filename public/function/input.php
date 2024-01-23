<?php
//Penelitian EDIT & Penelitian UPLOAD
    $id = (int) $_SESSION['id'];
    
    $query = mysqli_query ($conn, "SELECT * FROM user WHERE userid = '$id' ") or die (mysqli_error());
	$fetch = mysqli_fetch_array ($query);
    {
		$judul=$fetch['judul'];
        $nidn=$fetch['nidn'];
        $idPenelitian=$fetch['idPenelitian'];
		$anggota2=$fetch['anggota1'];
		$programHibah=$fetch['programHibah'];
		$skemaPenelitian=$fetch['skemaPenelitian'];
		$fakultas=$fetch['fakultas'];
		$publikasi=$fetch['publikasi'];
		$produk=$fetch['produk'];
		$kontrakRiset=$fetch['kontrakRiset'];
		$tanggalKontrak=$fetch['tanggalKontrak'];
		$tanggalKontrakLddikti=$fetch['tanggalKontrakLddikti'];
		$noPenugasan=$fetch['noPenugasan'];
		$tanggalKontrakLembaga=$fetch['tanggalKontrakLembaga'];
		$noTanggal=$fetch['noTanggal'];
		$paten=$fetch['paten'];
		$status=$fetch['status'];
		$userid=$fetch['userid'];
    }
?>

<?php
//Forum EDIT & Forum UPLOAD
$id = (int) $_SESSION['id'];
    
$query = mysqli_query ($conn, "SELECT * FROM user WHERE userid = '$id' ") or die (mysqli_error());
$fetch = mysqli_fetch_array ($query);
{
    $idPenelitian=$fetch['idPenelitian'];
    $judulMakalah=$fetch['judulMakalah'];
    $lampiran=$fetch['lampiran'];
    $namaForum=$fetch['namaForum'];
    $institusiPenyelenggara=$fetch['institusiPenyelenggara'];
    $tanggalAwal=$fetch['tanggalAwal'];
    $tanggalAkhir=$fetch['tanggalAkhir'];
    $tempat=$fetch['tempat'];
    $userid=$fetch['userid'];
}
?>

<?php
//HKI EDIT & HKI UPLOAD
$id = (int) $_SESSION['id'];
    
$query = mysqli_query ($conn, "SELECT * FROM user WHERE userid = '$id' ") or die (mysqli_error());
$fetch = mysqli_fetch_array ($query);
{
    $penelitian=$fetch['penelitian'];
    $judulHki=$fetch['judulHki'];
    $status=$fetch['status'];
    $jenis=$fetch['jenis'];
    $userid=$fetch['userid'];
}
?>


<?php
//Ajartext EDIT
$id = (int) $_SESSION['id'];
    
$query = mysqli_query ($conn, "SELECT * FROM user WHERE userid = '$id' ") or die (mysqli_error());
$fetch = mysqli_fetch_array ($query);
{
    $idPenelitian=$fetch['idPenelitian'];
    $judulBuku=$fetch['judulBuku'];
    $status=$fetch['status'];
    $jenis=$fetch['jenis'];
    $userid=$fetch['userid'];
}

//Ajartext UPLOAD
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    }

    if (!empty($_POST["folderName"])) {
        $targetDirectory = "uploads/";
        $targetFolder = $targetDirectory . $_POST["folderName"];

        if (mkdir($targetFolder, 0777, true)) {
            echo "Folder berhasil dibuat.";
        } else {
            echo "Gagal membuat folder.";
        }
    }
}
?>