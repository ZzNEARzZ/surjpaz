<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php base_url();?>assets/css/bootstrap-theme.min.css">

	<script src="<?php base_url();?>assets/js/jquery-1.12.0.min.js"></script>
	<script src="<?php base_url();?>assets/js/bootstrap.min.js"></script>
	
	<title>Pagina Prueba</title>


</head>
<body>

<div id="container">
	<h1> <?= $mensaje . ' '. $info?> </h1>
	<a href="<?=base_url()?>usuario">Link</a>

</div>

</body>
</html>