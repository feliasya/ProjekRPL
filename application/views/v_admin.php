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

<<<<<<< HEAD

=======
>>>>>>> e5ff1a8663dd8a5c1a4209f1542c398b727940f2
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
  padding-right:100px;
}

/* Middle column */
.column.middle {
  width: 20%;
}

.column.right {
  width: 20%;
  background-color: #F0EBD8;
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
  width: 20%;
  font-family: roboto;
  font-size: 20px;
}

.column1.right {
  width: 50%;
}
.header {
  background-color: #3E5C76;
  font-family: roboto;
  font-style: bold;
  text-align: center;
  font-size: 20px;
  color: white;
}

img{
	width:300px;
	height:300px;
	color:white;
}

</style>
</head>
<body>
	<div class="row">
<<<<<<< HEAD
	  <div>
        <img src="\ProjekRPL\CheckIn.png" style="width: 80px; height: 80px; margin: 20px;" align="left"> 
     <div>
        <img src="\ProjekRPL\logout-sign.png" style="width: 80px; height: 80px; margin: 20px;" align="right">
     </div>
    <div class="header">
        <h1>Selamat Datang di Check-IN, <?php echo $this->session->userdata("nama"); ?>
    </div>
	  
    <div style="padding-bottom: 53px" align="right">Help</div> 
	</div>

	<div>
=======
	  <div class="column left">
        <img src="\ProjekRPL\CheckIn.png" style="width: 50px; height: 50px;"> 
    </div>
	  <div class="column middle" style="padding-bottom: 53px" >Help</div>
	  <div class="column right">
        <a href="<?php echo base_url();?>index.php/login/logout">
          <img src="\ProjekRPL\logout-sign.png" style="width: 50px; height: 50px;">
        </a>
      </div>
	  </div>

	<h1>Selamat Datang, <?php echo $this->session->userdata("nama"); ?></h1>

	<div class="row1">
	  <div class="column1 left">
        <a href="<?php echo base_url();?>index.php/pinjam">
	      <img src="https://pngimage.net/wp-content/uploads/2018/06/list-vector-png.png"></div>
>>>>>>> e5ff1a8663dd8a5c1a4209f1542c398b727940f2
	  <div class="column1 right">
	      <img src="\ProjekRPL\1.png">
    </div>

<<<<<<< HEAD
	  <div class="column1 right">
        <img src="\ProjekRPL\2.png">
    </div>
=======
	<div class="row1">
	  <div class="column1 left">
        <input type="tempat" value="LIST TEMPAT SUDAH DIPINJAM"></div>
    <div class="column1 right">
        <input type="ptempat" value="PINJAM TEMPAT" href="<?php echo base_url();?>index.php/pinjam">
        <!--<a href="<?php echo base_url();?>index.php/pinjam">-->
      </div>
>>>>>>> e5ff1a8663dd8a5c1a4209f1542c398b727940f2
	</div>
</body>
</html>