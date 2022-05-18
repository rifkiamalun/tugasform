<!DOCTYPE html>
<html>
<head>
 <title>DATA</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <table>
 <tr>
 <th>No</th>
 <th>Nama Lengkap</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>Nama Orang Tua</th>
 <th>Pekerjaan</th>
 <th>Alamat</th>
 <th>Anak Ke</th>
 <th>Bersaudara</th>
 <th>Golongan Darah</th>
 <th>Bakat</th>
 <th>Hal - Hal </th>
 <th>organisasi</th>
 <th>Pengalaman</th>



 </tr>
 <?php 
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","tugaskuliah");

 // menampilkan data pegawai
 $data = mysqli_query($koneksi,"select * from user");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['id'] ?></td>
 <td><?php echo $d['nama']; ?></td>
 <td><?php echo $d['tempat']; ?></td>
 <td><?php echo $d['tanggal']; ?></td>
 <td><?php echo $d['orang']; ?></td>
 <td><?php echo $d['pkrj']; ?> </td>
 <td><?php echo $d['alamat']; ?> </td>
 <td><?php echo $d['anak']; ?> </td>
 <td><?php echo $d['bersaudara']; ?> </td>
 <td><?php echo $d['goldar']; ?> </td>
 <td><?php echo $d['sekolah']; ?> </td>
 <td><?php echo $d['bakat']; ?> </td>
 <td><?php echo $d['hal']; ?> </td>
 <td><?php echo $d['organisasi']; ?> </td>



 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>