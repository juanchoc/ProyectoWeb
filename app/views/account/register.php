<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="login login-box">

		<div class="login-triangle"></div>
		<h2 class="login-header">Cree una cuenta</h2>

		<form method="post" action="./?c=account&a=registerNext" class="login-container">
			<div class="col-6"><input type="text" name="nombre" placeholder="Nombre" required="true"></div>
			<div class="col-6"><input type="text" name="usuario" placeholder="Usuario" required="true"></div>
			<div class="col-6"><input type="text" name="apellidop" placeholder="Apellido Paterno" required="true"></div>
			<div class="col-6"><input type="password" name="contrasena" placeholder="Contraseña" required="true"></div>
			<div class="col-6"><input type="text" name="apellidom" placeholder="Apellido Materno" required="true"></div>
			<div class="col-6"></div>
			<div class="col-6"><input type="email" name="email" placeholder="Email" required="true"></div>
			<div class="col-6"><input type="email" name="confirmar" placeholder="Confirmar email" required="true"></div>
			<div class="col-6"><input type="text" name="tarjeta" placeholder="Tarjeta" required="true"></div>
			<div class="col-3"><input type="text" name="Cuv" placeholder="CUV" required="true"></div>
			<div class="col-3"><input type="text" name="exp" placeholder="ExpData" required="true"></div>
			<div class="col-12"><input type="submit" name="siguiente" value="Siguiente"></div>
		</form>

	</div>

</body>
</html>