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
</style>
</head>

<body>
        <img src="\ProjekRPL\CheckIn.png" style="width: 80px; height: 80px; margin: 20px;" align="left"> 
     <div>
        <a href="<?php echo base_url();?>index.php/admin/logout"> 
        <img src="\ProjekRPL\logout-sign.png" style="width: 80px; height: 80px; margin: 20px;" align="right">
        </a>
     </div>
<div class="header">
        <h1>Selamat Datang di Check-IN, <?php echo $this->session->userdata("nama"); ?>
</div>
<form action="<?php echo base_url();?>index.php/pinjam/aksi_peminjaman" method="get">
    <div class="transparent box">
    <div class="upperForm">
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
    </div>
    <div class="lowerLeftForm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label"><small>Input Tanggal Peminjaman: </small></label>
                            <div class='input-group date' id='dtp_icon'>
                                <input type="text" name="tanggal_mulai" class="form-control" id="input_dtp_icon" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label"><small>Input Tanggal Selesai: </small></label>
                            <div class='input-group date' id='dtp_icon'>
                                <input type="text" name="tanggal_selesai" class="form-control" id="input_dtp_icon" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lowerRightForm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label"><small>Input Jam Mulai: </small></label>
                                <div class='input-group date' id='dtp_jam'>
                                     <input type="text" name="jam_mulai" class="form-control" id="input_dtp_jam" />
                                     <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label"><small>Input Jam Mulai: </small></label>
                                <div class='input-group date' id='dtp_jam'>
                                     <input type="text" name="jam_selesai" class="form-control" id="input_dtp_jam" />
                                     <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" value="Konfirmasi">
</form>
<!-- js untuk jquery -->
<script src="js/jquery-1.11.2.min.js"></script>
 <!-- js untuk bootstrap -->
 <script src="js/bootstrap.js"></script>
 <!-- js untuk moment -->
 <script src="js/moment.js"></script>
 <!-- js untuk bootstrap datetimepicker -->
 <script src="js/bootstrap-datetimepicker.min.js"></script>

 <script type="text/javascript">
  $(document).ready(function(){
    $('#dtp').datetimepicker({
     format : 'DD/MM/YYYY'
    });
    $('#dtp_icon').datetimepicker({
     format : 'DD/MM/YYYY'
    });
    $('#dtp_jam').datetimepicker({
     format : 'HH:mm'
    });
  });
 </script>