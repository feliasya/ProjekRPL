<!DOCTYPE html>
<html>
<head>
	<title>Welcome to CheckIn!!!</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<?php echo base_url() ?>
	<h2>Selamat Datang, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url();?>index.php/login/logout">Logout</a>
</body>
</html>