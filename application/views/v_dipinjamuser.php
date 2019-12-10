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
        <h1>Tempat Sudah Dipinjam</h1>
        <form name="Dipinjam" action="<?php echo base_url();?>index.php/pinjam/sudahdipinjam"></form>
</div>

</body>
</html>
