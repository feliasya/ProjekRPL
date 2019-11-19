<!DOCTYPE html>
<html>
<head>
	<title>Welcome to CheckIn!!!</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<h3>(Logo Bantuan)---->Catatan : ini logo bantuan ditaro nya di dashboard ya di atas, sebelahan sama logout nanti simpen di atas aja</h3>
	<p><h5>(LOGO LIST RUANGAN)</h5><p>
	<p><h5>(LOGO PINJAM RUANGAN)</h5><p>

	<a href="<?php echo base_url();?>index.php/login/logout">Logout(jadiin logo aja, pake logo "turn off")</a>
</body>
</html>