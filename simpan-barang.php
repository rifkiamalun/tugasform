<?php
//Include file koneksi ke database
include "connect.php";

//menerima nilai dari kiriman form input-barang 
$nama=$_POST["nama"];
$tempat=$_POST["tempat"];
$tanggal=$_POST["tanggal"];
$orang=$_POST["orang"];
$pkrj=$_POST["pkrj"];
$alamat=$_POST["alamat"];
$anak=$_POST["anak"];
$bersaudara=$_POST["bersaudara"];
$goldar=$_POST["goldar"];
$sekolah=$_POST["sekolah"];
$bakat=$_POST["bakat"];
$hal=$_POST["hal"];
$organisasi=$_POST["organisasi"];



//Query input menginput data kedalam tabel barang
  $sql="INSERT INTO barang (nama,tempat,tanggal,orang,pkrj,alamat,anak,bersaudara,goldar,sekolah,bakat,hal,organisasi) values
		('$nama','$tempat','$tanggal','$orang','$pkrj','$alamat','$anak','$bersaudara','$goldar','$sekolah','$bakat','$hal','$organisasi')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil insert data";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  

?>