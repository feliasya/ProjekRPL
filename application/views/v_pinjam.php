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

.upperRow{
    padding: 50px;
}

.upperRow li{
    display : inline-block;
    padding-bottom : 0%;
    padding-top : 0%;
}


input,select{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 20px;
  box-sizing: border-box;
  background-color:white;
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

div.content{
  border-radius: 10px;
  padding-left: 100px;
  padding-right: 100px;
  padding-top: 50px;
  padding-bottom: 50px;
  margin-top: 30px;
  margin-left: 30px;
  margin-right: 30px;
  font-size: 18px;
}

</style>
</head>

<body>

<div class="upperRow">
    <img src="\ProjekRPL\CheckIn.png" style="width: 50px; height: 50px; margin: 20px;" align="left">
    <a href="<?php echo base_url();?>index.php/login/logout">
    <img src="\ProjekRPL\logout-sign.png" style="width: 50px; height: 50px; margin: 20px;" align="right">
    </a>   
</div>
<div class="content">
    <form name="peminjaman" action="<?php echo base_url();?>index.php/pinjam/aksi_peminjaman" method="get">
            <label for="pnama">Nama Peminjam</label>
            <input type="text" id="pnama" name="NamaPeminjam" placeholder="Nama Peminjam" required="required">

            <label for="pnpm">NPM</label>
            <input type="text" id="pnpm" name="NPMPeminjam" placeholder="NPM Peminjam" required="required">

            <label for="pfakultas">Fakultas</label>
            <input type="text" id="pfakultas" name="Fakultas_Peminjam" placeholder="Fakultas" required="required">

            <label for="pjurusan">Jurusan</label>
            <input type="text" id="pjurusan" name="Jurusan_Peminjam" placeholder="Jurusan" required="required">

            <label for="pInstansi">Instansi</label>
            <input type="text" id="pInstansi" name="Instansi_Peminjam" placeholder="Instansi" required="required">

            <label for="pTempat">Ruangan yang akan dipinjam</label>
            <input type="text" id="pTempat" name="Tempat_Pinjam" placeholder="Tempat" required="required">

            <label for="pAcara">Acara</label>
            <input type="text" id="pAcara" name="Acara" placeholder="Acara" required="required">