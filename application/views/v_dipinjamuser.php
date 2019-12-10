<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css">  
</head>
<style type="text/css">
* {
  box-sizing: border-box;
  background-color:#3E5C76;
  color: #F0EBD8;
}
input[type=submit] {
  width: 100%;
  background-color: white;
  color: #0D1321;
  padding: 14px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 20px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #0D1321;
  color:white;
}
.header {
  background-color: #3E5C76;
  font-family: roboto;
  font-style: bold;
  text-align: center;
  font-size: 20px;
  color: white;
}

.table1 {
  margin: 20px auto;
  font-family: sans-serif; 
  color: #444;
  border-collapse: collapse;
  width: 50%;
  border : 1px solid #f2f5f7;
}

.table1 tr th{
  background: #F0EBD8;
  color: #fff;
  font-weight: normal;
}

.table1, th, td{
  padding: 8px 20px;
  text-align: center;
}

.table1 tr:hover {
  background-color: #f5f5f5;
}

.table1 tr:nth-child(even){
  background-color: #f2f2f2;
}

</style>
</head>

<body>
        <img src="\ProjekRPL\CheckIn.png" style="width: 80px; height: 80px; margin: 20px;" align="left"> 
     <div>
        <a href="<?php echo base_url();?>index.php/login/logout"> 
        <img src="\ProjekRPL\logout-sign.png" style="width: 80px; height: 80px; margin: 20px;" align="right">
        </a>
     </div>
<div class="header">
        <h1>Tempat Sudah Dipinjam</h1>
        <table class="table1">
          <tr>
            <th>No</th>
            <th>Nama Peminjam</th>
            <th>NPM</th>
            <th>Fakultas</th>
            <th>Instansi</th>
            <th>Ruangan yang dipinjam</th>
            <th>Acara</th>
            <th>Mulai</th>
            <th>Selesai</th>
            <th>Dari Pukul</th>
            <th>Hingga</th>
          </tr>
          <?php
          $no = 1;
          foreach ($user as $u){
            ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $u->peminjam ?></td>
              <td><?php echo $u->npm ?></td>
              <td><?php echo $u->fakultas ?></td>
              <td><?php echo $u->instansi ?></td>
              <td><?php echo $u->kode_ruang ?></td>
              <td><?php echo $u->acara ?></td>
              <td><?php echo $u->tanggal_mulai ?></td>
              <td><?php echo $u->tanggal_selesai ?></td>
              <td><?php echo $u->waktu_mulai ?></td>
              <td><?php echo $u->waktu_selesai ?></td>
              </td>
            </tr>
          <?php } ?>
          </table>
          
</div>

</body>
</html>
