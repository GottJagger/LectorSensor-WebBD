<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Source+Sans+Pro&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="icontab.png">
	<title>Enco Software</title>
	<link rel="stylesheet" type="text/css" href="help.css">
	<script src="up.js" type="text/javascript"></script>
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
			<li class="li1"><a href="index.php">Inicio</a></li>
			<li class="li1"><a href="software.php">Software</a></li>
			<li class="li1"><a class="active" href="help.php">Help</a></li>
			<li style="float: right" class="li1"><a  href="log in.php">Log In</a></li>
			</ul>
		</div>
	</div>

	<div id="body">
		<br>
		<label>
			<span>Help | FAQ </span>
		</label>
		<div id="cuerpo">
			<h2>Arduino Introduction</h2>
			<h3>What do you mean by open-source hardware?</h3>
			<p>
				El hardware de código abierto comparte gran parte de los principios y el enfoque del software libre y de código abierto. En particular, creemos que las personas deberían poder estudiar nuestro hardware para comprender cómo funciona, realizar cambios en él y compartir esos cambios. Para facilitar esto, lanzamos todos los archivos de diseño originales (Eagle CAD) para el hardware Arduino. Estos archivos están licenciados bajo una licencia Creative Commons Attribution Share-Alike, que permite trabajos derivados tanto personales como comerciales, siempre que acrediten a Arduino y publiquen sus diseños bajo la misma licencia. El software Arduino también es de código abierto. El código fuente para el entorno Java se publica bajo la GPL y las bibliotecas de microcontroladores C / C ++ están bajo la LGPL.
			</p>
			<h2>Arduino Software</h2>
			<h3>Can I program the Arduino board in C?</h3>
			<p>
				De hecho, ya lo eres; El lenguaje Arduino es simplemente un conjunto de funciones C / C ++ que se pueden invocar desde su código. Su boceto sufre cambios menores (por ejemplo, generación automática de prototipos de funciones) y luego se pasa directamente a un compilador C / C ++ (avr-g ++). Todas las construcciones estándar de C y C ++ compatibles con avr-g ++ deberían funcionar en Arduino. Para obtener más detalles, consulte la página sobre el proceso de compilación de Arduino.
			</p>

		</div>
		<br>
		<label>
			<span>Help | contactanos </span>
		</label>
		<div id="cuerpo">
			<div class="contacto">
				<H3>E-mail:</H3> 
				<a id="Email" href="https://mail.google.com/mail/?view=cm&fs=1&to=jose.chagui@cecar.edu.co&su=Contrato" target="_blank" style="font-family: 'Noto Sans JP', sans-serif">jose.chagui@cecar.edu.co</a>
			</div>
			
			<div class="contacto">
				<h3>Telefono:</h3> 
				<a id="Telefono" href="https://wa.me/573218480935" target="_blank" style="font-family: 'Noto Sans JP', sans-serif">3218480935</a>
			</div>
			
			<div class="contacto">
				<h3>Direccion: </h3>
				<a id="Direccion" href="https://goo.gl/maps/oQQsibimDXZZFYGd9" target="_blank" style="font-family: 'Noto Sans JP', sans-serif">Calle 25A #49-09</a>
			</div>
			
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
	<div id="up">
			<button onclick="topFunction()" id="myBtn" title="Go to top"><img id="upim" src="up.png"></button>
	</div>
</body>
</html>