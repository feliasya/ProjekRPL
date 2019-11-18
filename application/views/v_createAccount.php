<!DOCTYPE html>
<html>
<body>

<p><h3><b>CheckIn</b></h3></p>
<p><h4>Isi form di bawah ini untuk membuat akun baru</h4></p>
<p><h4><i>*pastikan field tidak ada yang kosong*</h4></p>

<div>
    <form action="<?php echo base_url();?>index.php/createAccount/aksi_akunBaru" method="post">
        <span><?php echo $this->session->userdata('message'); ?></span>
        <label for="fnama">Nama Lengkap*</label>
        <input type="text" id="fnama" name="inputNama" placeholder="Nama Lengkap" required="required">

        <label for="kontak_hp">Nomor HP</label>
        <input type="text" id="kontak_hp" name="inputHP" placeholder="Nomor Hp">

        <label for="kontak_email">Email</label>
        <input type="text" id="kontak_email" name="inputEmail" placeholder="Email">

        <label for="lfakutlas">Fakultas*</label>
        <input type="text" id="lfakultas" name="inputFakultas" placeholder="Fakultas" required="required">

        <label for="ljurusan">Program Studi*</label>
        <input type="text" id="ljurusan" name="inputJurusan" placeholder="Program Studi" required="required">

        <label for="lnpm">NPM*</label>
        <input type="text" id="lnpm" name="inputNPM" placeholder="NPM" required="required">

        <label for="langkatan">Angkatan*</label>
        <input type="text" id="langkatan" name="inputAngkatan" placeholder="Angkatan" required="required">

        <p><h5>Gunakan 16 karakter unik yang mudah diingat untuk username anda</h5></p>
        <label for="uname">Username*</label>
        <input type="text" id="uname" name="inputUname" placeholder="Username" required="required">
        
        <label for="psswrd">Password*</label>
        <input type="password" id="psswrd" name="inputPw" placeholder="password" required="required">

        <input type="submit" value="Buat Akun">
        <p><a href="<?php echo base_url();?>">Cancel</a></p>


</div>

