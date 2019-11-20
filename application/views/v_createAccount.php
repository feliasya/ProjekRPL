<!DOCTYPE html>
<html>

<head>
<style type="text/css">

* {
  box-sizing: border-box;
  background-color:#3E5C76;
  color: #F0EBD8;
}

body{
    margin: 0px;
}

.header {
  background-color: #F0EBD8;
  padding: 20px;
  font-family: calibri;
  font-style: bold;
  text-align: center;
  font-size: 40px;
  color: #3E5C76;
}

h4{
    padding-left: 20px;
}
input, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 20px;
  box-sizing: border-box;
}

.row {
  background-color: #3E5C76;
  border-radius: 10px;
  padding-left: 100px;
  padding-right: 100px;
  padding-top: 5px;
  color: #3E5C76;
  font-size: 18px;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.left {
  width: 50%;
}

/* Middle column */
.column.right {
  width: 50%;
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

<div class="header">CheckIn</div>
<p><h4>Register an Account</h4></p>
<p><h4><i>*the field must be filled</h4></p>

<div class="row">
<div class="column left">
    <form action="<?php echo base_url();?>index.php/createAccount/aksi_akunBaru" method="post">
        <span><?php echo $this->session->userdata('message'); ?></span>
        <label for="fnama">Name*</label>
        <input type="text" id="fnama" name="inputNama" placeholder="Name" required="required">

        <label for="kontak_hp">Telephone Number</label>
        <input type="text" id="kontak_hp" name="inputHP" placeholder="Telephone Number">

        <label for="kontak_email">Email</label>
        <input type="text" id="kontak_email" name="inputEmail" placeholder="Email">

        <label for="lfakutlas">Faculty*</label>
        <input type="text" id="lfakultas" name="inputFakultas" placeholder="Faculty" required="required">

        <label for="ljurusan">Major*</label>
        <input type="text" id="ljurusan" name="inputJurusan" placeholder="Major" required="required">

        <label for="lnpm">NPM*</label>
        <input type="text" id="lnpm" name="inputNPM" placeholder="NPM" required="required">

        <label for="langkatan">Batch*</label>
        <input type="text" id="langkatan" name="inputAngkatan" placeholder="Batch" required="required">
</div>

<div class="column right">
        <p><h5>Use 16 unique character that easy to remember for your username</h5></p>
        <hr>
        <label for="uname">Username*</label>
        <input type="text" id="uname" name="inputUname" placeholder="Username" required="required">
        
        <label for="psswrd">Password*</label>
        <input type="password" id="psswrd" name="inputPw" placeholder="password" required="required">

        <input type="submit" value="Buat Akun">
        <p><a href="<?php echo base_url();?>">Cancel</a></p>
    </form>
</div>
</div>

