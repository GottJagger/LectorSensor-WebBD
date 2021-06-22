<?php

	session_start();

	if (isset($_SESSION['user_id'])) {
		header('Location: /proyecto web arduino/DASHBOARD/DBinicio.php');
	}

	require 'database.php';
	if (!empty($_POST['email']) && !empty($_POST['password'])) {
		$records=$conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
		$records->bindParam('email',$_POST['email']);
		$records->execute();
    	$results = $records->fetch(PDO::FETCH_ASSOC);

    	$message = '';
		if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      		$_SESSION['user_id'] = $results['id'];
      		header("Location: /proyecto web arduino/DASHBOARD/dashboard.php");
    	} else {
      		$message = 'lo siento, estas credenciales no existen o son incorrectas.';
    	}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Enco Software</title>
	<link rel="shortcut icon" type="image/png" href="icontab.png">
	<link rel="stylesheet" type="text/css" href="log in.css">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto+Mono&family=Source+Sans+Pro&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
</head>
<body>
	<div id="title">
		<div class="top">
			<a href="index.php">
				<img id="logo" src="nombre de empresa.jpg">
			</a>
			<div id="social">
				<ul id="menu1">
					<li class="li2"><a href=""><img src="iconfb.png"></a></li>
					<li class="li2"><a href=""><img src="iconig.png"></a></li>
					<li class="li2"><a href=""><img src="icongm.png"></a></li>
				</ul>
			</div>
			
		</div>
		
		<div>
			<ul id="menu">
			<li class="li1"><a  href="index.php">Inicio</a></li>
			<li class="li1"><a  href="software.php">Software</a></li>
			<li class="li1"><a  href="help.php">Help</a></li>
			<li style="float: right" class="li1"><a class="active" href="log in.php">Log In</a></li>

			</ul>
		</div>
	</div>

	<div id="body">
		<br>
		<label id="top">
			<span id="topspan">LOGIN</span>
			<span id="topspan">o <a href="sign up.php">SignUp</a>
		</label>
		<div id="cuerpo">
			<div id="mensaje">
				<?php if(!empty($message)): ?>
	      		<p> <?= $message ?></p>
	   			<?php endif; ?>
			</div>
			<img src="icontab.png" id="logim">
			<form action="log in.php" method="post">
  				<div class="container">
    				<label for="uname"><b>Correo</b></label>
    				<input type="email" placeholder="Enter Email" name="email" required>

    				<label for="psw"><b>Contraseña</b></label>
    					<input type="password" placeholder="Enter Password" name="password" required>
        
    					<button type="submit">Login</button>
    				<label>
      					<input type="checkbox" checked="checked" name="remember"> Recordarme
    				</label>
  				</div>
			</form>
		</div>
		<br>

	</div>
	<div id="footer">
		<div class="foot">
			<a href="index.html">
				<img  src="icontab.png">
			</a>
		</div>
		<div class="foot">
			
			<h3>sobre nosotros</h3>
			<p id="footp">somos una pequeña empresa dependiente de Enco con el fin de proveer software para la misma.</p>

		</div>
		<div class="foot" style="padding-left: 20%">
			<h3>informacion</h3>
			<ul id="fooul">
				<li>blog</li>
				<br>
				<li>testimonios</li>
				<br>
				<li>eventos</li>
			</ul>
		</div>
		<br>
	</div>
</body>
</html>