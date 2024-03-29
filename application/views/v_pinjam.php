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
    padding: 10px;
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
  color: grey;
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
.header {
  background-color: #3E5C76;
  padding: 10px;
  font-family: roboto;
  font-style: bold;
  text-align: center;
  font-size: 20px;
  color: white;
}

</style>
</head>

<body>
<div class="upperRow">
    <img src="\ProjekRPL\CheckIn.png" style="width: 80px; height: 80px; margin: 10px;" align="left">
    <a href="<?php echo base_url();?>index.php/login/logout">
    <img src="\ProjekRPL\logout-sign.png" style="width: 80px; height: 80px; margin: 10px;" align="right">
    </a>   
</div>
<div class="header">
        <h1>Pinjam Tempat</h1>
</div>
<div class="content">
    <form action="<?php echo base_url();?>index.php/pinjam/aksi_peminjaman" method="get">
            <hr>
            <label for="pnama">Nama Peminjam</label>
            <input type="text" id="pnama" name="NamaPeminjam" placeholder="Nama Peminjam" required="required">

            <label for="pnpm">NPM</label>
            <input type="text" id="pnpm" name="NPMPeminjam" placeholder="NPM Peminjam" required="required">

            <label for="pfakultas">Fakultas</label>
            <select name="Fakultas_Peminjam" id="main_dropdown" class="custom_select">
            <option value="">Pilih Fakultas</option>
            <option value="FMIPA">FMIPA</option>
            <option value="FIB">FIB</option>
            <option value="FISIP">FISIP</option>
            </select>
            <label for="pjurusan">Jurusan</label>
            <select name="Jurusan_Peminjam" id="sub_dropdown" class="custom_select">
            <option value="">Pilih Jurusan</option>

            <label for="pInstansi">Instansi</label>
            <input type="text" id="pInstansi" name="Instansi_Peminjam" placeholder="Instansi" required="required">

            <label for="pTempat">Kode Tempat</label>
            <input type="text" id="pTempat" name="Tempat_Pinjam" placeholder="Kode Ruang Peminjaman" required="required">

            <label for="pAcara">Acara</label>
            <input type="text" id="pAcara" name="Acara" placeholder="Acara" required="required">

            <label for="pTanggalM">Tanggal Mulai</label>
            <input type="date" id="pTanggalM" name="tanggal_mulai" required="required">

            <label for="pTanggalS">Tanggal Selesai</label>
            <input type="date" id="pTanggalS" name="tanggal_selesai" required="required">

            <label for="pWmulai">Waktu Mulai</label>
            <input type="time" id="pWmulai" name="jam_mulai" placeholder="Waktu Mulai Peminjaman" required="required">

            <label for="pWSelesai">Waktu Selesai</label>
            <input type="time" id="pWSelesai" name="jam_selesai" placeholder="Waktu Selesai Peminjaman" required="required">

            <input type="submit" value="PINJAM">
    </form>
</div>
<div class="upperRow">
<a href="<?php echo base_url();?>index.php/infotempat">List Tempat</a>
</div>
<script src="dynamicDropdown.js"></script>
</body>