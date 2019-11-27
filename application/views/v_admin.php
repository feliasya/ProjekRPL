<!DOCTYPE html>
<html>
<head>
	<title>Welcome to CheckIn!!!</title>

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
  font-family: calibri;
  font-style: bold;
  text-align: center;
  font-size: 20px;
  color: #3E5C76;
}

.row {
  border-radius: 10px;
  margin:0px;
  font-size: 18px;
  padding-bottom: 10px;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  background-color: #F0EBD8;
  padding: 20px;
  font-family: calibri;
  font-style: bold;
  text-align: center;
  color: #3E5C76;
}

/* Left and right column */
.column.left {
  width: 60%;
  padding-right:700px;
}

/* Middle column */
.column.middle {
  width: 20%;
}

.column.right {
  width: 20%;
}

input[type=tempat] {
  width: 50%;
  background-color: white;
  color: #0D1321;
  padding: 14px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 20px;
  cursor: pointer;
  text-align: center;
}

input[type=tempat]:hover {
  background-color: #0D1321;
  color:white;
}

input[type=ptempat] {
  width: 50%;
  background-color: white;
  color: #0D1321;
  padding: 14px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 20px;
  cursor: pointer;
  text-align: center;
}

input[type=ptempat]:hover {
  background-color: #0D1321;
  color:white;
}

.row1 {
  border-radius: 10px;
  margin:0px;
  font-size: 18px;
  padding-bottom: 10px;
}

/* Create three unequal columns that floats next to each other */
.column1 {
  float: left;
  background-color: #3E5C76;
  padding: 20px;
  font-family: calibri;
  font-style: bold;
  text-align: center;
  color: #3E5C76;
}

/* Left and right column */
.column1.left {
  width: 50%;
}

.column1.right {
  width: 50%;
}

img{
	width:200px;
	height:200px;
	color:white;
}

</style>
</head>
<body>
	<div class="row">
	  <div class="column left">
        <img src="\ProjekRPL\CheckIn.png" style="width: 50px; height: 50px;"> 
    </div>
	  <div class="column middle" style="padding-bottom: 53px" >Help</div>
	  <div class="column right">
        <img src="\ProjekRPL\logout-sign.png" style="width: 50px; height: 50px;">
    </div>
	</div>
  <div class="header">
	<h1>Selamat Datang, <?php echo $this->session->userdata("nama"); ?></div>

	<div class="row1">
	  <div class="column1 left">
	      <img src="https://pngimage.net/wp-content/uploads/2018/06/list-vector-png.png"></div>
	  <div class="column1 right">
        <img src="https://pngimage.net/wp-content/uploads/2018/06/icon-list-png-9.png"></div>
	</div>

	<div class="row1">
	  <div class="column1 left">
        <input type="tempat" value="LIST TEMPAT SUDAH DIPINJAM"></div>
    <div class="column1 right">
        <input type="ptempat" value="PINJAM TEMPAT"></div>
	</div>

	<a href="<?php echo base_url();?>index.php/login/logout">Logout(jadiin logo aja, pake logo "turn off")</a>
</body>
</html>