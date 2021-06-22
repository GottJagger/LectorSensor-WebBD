<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Source+Sans+Pro&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
	<title>Enco Software</title>
	<link rel="shortcut icon" type="image/png" href="icontab.png">
	<link rel="stylesheet" type="text/css" href="software.css">
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
			<li class="li1"><a class="active" href="software.php">Software</a></li>
			<li class="li1"><a href="help.php">Help</a></li>
			<li style="float: right" class="li1"><a  href="log in.php">Log In</a></li>
			</ul>
		</div>
	</div>

	<div id="body">
		<br>
		<label>
			<span>Sotfware | Arduino</span>
		</label>
		<div id="cuerpo">
			<img id="ar1" src="arduino logo.png">
			<p id="p1">
				Arduino es una compañía de desarrollo de software y hardware libres, así como una comunidad internacional que diseña y manufactura placas de desarrollo de hardware para construir dispositivos digitales y dispositivos interactivos que puedan detectar y controlar objetos del mundo real. Arduino se enfoca en acercar y facilitar el uso de la electrónica y programación de sistemas embebidos en proyectos multidisciplinarios. Los productos que vende la compañía son distribuidos como Hardware y Software Libre, bajo la Licencia Pública General de GNU (GPL) y la Licencia Pública General Reducida de GNU (LGPL),1​ permitiendo la manufactura de las placas Arduino y distribución del software por cualquier individuo. Las placas Arduino están disponibles comercialmente en forma de placas ensambladas o también en forma de kits, hazlo tu mismo (del inglés DIY: "Do It Yourself").
			</p>
		</div>

		<br>

		<div id="cuerpo">
			<img id="ar2" src="arduino uno.png">
			<p id="p2">
				Los diseños de las placas Arduino usan diversos microcontroladores y microprocesadores. Generalmente el hardware consiste de un microcontrolador Atmel AVR, conectado bajo la configuración de "sistema mínimo" sobre una placa de circuito impreso a la que se le pueden conectar placas de expansión (shields) a través de la disposición de los puertos de entrada y salida presentes en la placa seleccionada. Las shields complementan la funcionalidad del modelo de placa empleada, agregando circuiteria, sensores y módulos de comunicación externos a la placa original. La mayoría de las placas Arduino pueden ser alimentadas por un puerto USB o un puerto barrel Jack de 2.5mm. La mayoría de las placas Arduino pueden ser programadas a través del puerto serie que incorporan haciendo uso del Bootloader que traen programado por defecto. El software de Arduino consiste de dos elementos: un entorno de desarrollo (IDE) (basado en el entorno de processing y en la estructura del lenguaje de programación Wiring), y en el cargador de arranque (bootloader, por su traducción al inglés) que es ejecutado de forma automática dentro del microcontrolador en cuanto este se enciende. Las placas Arduino se programan mediante un computador, usando comunicación serie.
			</p>
		</div>
		<br>
		<label>
			<span>Sotfware | Arduino IDE</span>
		</label>
		<div id="cuerpo">
			<img id="ar3" src="arduino ide.png">
			<p>
				El entorno de desarrollo integrado (IDE) de Arduino es una aplicación multiplataforma (para Windows, macOS, Linux ) que está escrita en el lenguaje de programación Java. Se utiliza para escribir y cargar programas en placas compatibles con Arduino, pero también, con la ayuda de núcleos de terceros, se puede usar con placas de desarrollo de otros proveedores.

				El código fuente para el IDE se publica bajo la Licencia Pública General de GNU, versión 2.​ El IDE de Arduino admite los lenguajes C y C ++ utilizando reglas especiales de estructuración de códigos.3 El IDE de Arduino suministra una biblioteca de software del proyecto Wiring, que proporciona muchos procedimientos comunes de E/S. El código escrito por el usuario solo requiere dos funciones básicas, para iniciar el boceto y el ciclo principal del programa, que se compilan y vinculan con un apéndice de programa main() en un ciclo con el GNU toolchain, que también se incluye. El IDE de Arduino emplea el programa avrdude para convertir el código ejecutable en un archivo de texto en codificación hexadecimal que se carga en la placa Arduino mediante un programa de carga en el firmware de la placa.
			</p>
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