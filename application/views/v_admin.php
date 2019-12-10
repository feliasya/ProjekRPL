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
.middleRow{
  text-align : center;
  margin: 0;
  padding: 0;
}

.middleRow li{
  display: inline-block;
  padding: 5%;
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

	  <div>
        <img src="\ProjekRPL\CheckIn.png" style="width: 80px; height: 80px; margin: 20px;" align="left"> 
     <div>
        <a href="<?php echo base_url();?>index.php/login/logout"> 
        <img src="\ProjekRPL\logout-sign.png" style="width: 80px; height: 80px; margin: 20px;" align="right">
        </a>
     </div>
    <div class="header">
        <h1>Selamat Datang di Check-IN, <?php echo $this->session->userdata("nama"); ?>
    </div>
	  
    <div style="padding-bottom: 53px" align="right">Help</div> 
	  </div>

	  <div class = "middleRow">
        <li>
          <a href="<?php echo base_url();?>index.php/sudahdipinjam">
	         <img src="\ProjekRPL\1.png">
          </a>
        </li>
        <li>
          <div class="blankSpace"></div>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/pinjam">
            <img src="\ProjekRPL\2.png">
          </a>  
        </li>
    </div>
	</div>
</body>
</html>