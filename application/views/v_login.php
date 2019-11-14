<!DOCTYPE html>
<html>
<style>

body{
	background-color: #3E5C76;
}

h3{
	text-align: center;
	font-size: 40px;
	color: #F0EBD8;
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

div {
  border-radius: 20px;
  background-color:#F0EBD8;
  padding-left: 100px;
  padding-right: 100px;
  padding-top: 50px;
  padding-bottom: 50px;
  margin-left: 400px;
  margin-right: 400px;
  color: gray;
  font-size: 18px;
}

a{
	color: #6a5acd;
}
/* mouse over link */
a:hover {
	color:#787878;
}
</style>
<body>

<h3><b>CheckIn</b></h3>

<div>
	<form action="<?php echo base_url();?>index.php/login/aksi_login" method="post">

    <label for="fname">Username</label>
    <input type="text" id="fname" name="username" placeholder="username">

    <label for="lname">Password</label>
    <input type="password" id="lname" name="password" placeholder="password">
    <span><?php echo $this->session->userdata('message'); ?></span>
    <input type="submit" value="LOGIN">
    <p><a href="default.asp" target="_blank">Forget password?</a></p>
    <p><a href="default.asp" target="_blank">Create new account</a></p>
  </form>
</div>

</body>
</html>

