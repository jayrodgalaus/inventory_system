<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="description" content="Inventory System">
    <meta name="author" content="Jayrod Galaus">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<title>Inventory System</title>
	<!-- cdn -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
	<!-- local fallback-->
	<script type="text/javascript">
		window.jQuery || document.write("<script src='resources/js/jquery-3.6.0.min.js'><\/script>");
	</script>
	<script type="text/javascript">
		if(!$.fn.popover){
			console.log('No bootstrap');
			document.write('<script src="resources/bootstrap/js/bootstrap.min.js"><\/script>');
			document.write('<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.bundle.min.css"><\/script>');
			document.write('<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.esm.min.css"><\/script>');
			document.write('<link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css"><\/script>');
		}
	</script>
	<!-- local css -->
	<link rel="stylesheet" type="text/css" href="resources/css/general.css">
	<script type="text/javascript" src="resources/js/general.js"></script>
	<script type="text/javascript" src="resources/js/bs-override.js"></script>
</head>
<body>