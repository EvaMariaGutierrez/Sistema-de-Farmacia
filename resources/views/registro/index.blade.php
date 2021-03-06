@extends('layouts.app')
@section('content')
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.minfor.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/utilfor.css">
	<link rel="stylesheet" type="text/css" href="../css/mainfor.css">
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="/registro">
				<span class="contact100-form-title">
					FORMULARIO DE COMPRA
				</span>
				@csrf

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">NOMBRE COMPLETO *</span>
					<input class="input100" type="text" name="name" placeholder="Escriba su Nombre Completo">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">EMAIL *</span>
					<input class="input100" type="text" name="email" placeholder="Escriba su Email ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">CELULAR</span>
					<input class="input100" type="text" name="celular" placeholder="Escriba su número de celular">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Nombre del Producto *</span>
					<input class="input100" type="text" name="nomproducto" placeholder="Escriba el nombre del Producto ">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100">
					<span class="label-input100">Codigo del Producto</span>
					<input class="input100" type="text" name="codproducto" placeholder="Escriba su codigo del Producto">
				</div>

				
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">N° de Tarjeta de Credito</span>
					<input class="input100" type="text" name="numtarjeta" placeholder="Escriba su de Targeta">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Ciudad</span>
					<input class="input100" type="text" name="ciudad" placeholder="Escriba el nombre de su Ciudad">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Direccion</span>
					<input class="input100" type="text" name="direccion" placeholder="Escriba su Direccion">
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							COMPRAR
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="..vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
@endsection