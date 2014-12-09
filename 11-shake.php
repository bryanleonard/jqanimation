<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.3.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>

/* sample-code/9642_06_code/img/ */		
form {
width:235px;
min-height: 195px;
padding:20px;
margin:auto;
border:1px solid #000;
font:normal 13px sans-serif;
}
h2 {
font-size:14px;
margin-top:0;
}
input {
display:block;
margin-bottom:10px;
border:1px solid #000;
height: 20px !important;
}

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Shake</h1>
	</hgroup>

<form>
<h2>Login</h2>
<label>Username:<input id="name" type="text"></label>
<label>Password:<input id="pass" type="text"></label>
<input type="submit" id="submit" value="Login">
</form>

			</div>
		</div>

	</div>
</div>


<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="/assets/lib/jquery-1.11.1.js"></script>
<script src="/assets/lib/jquery-ui-1.10.4/js/jquery-ui-1.10.4.js"></script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script> -->
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script> -->
<!-- <script src="scripts.js"></script> -->

<script>
$("#submit").click(function(e) {
	e.preventDefault();
	$("input").each(function(i, val) {
		if (!$(this).val()) {
			$(this).css("border", "1px solid red").effect("shake", {
			distance: 10 }, 300);
		}
	});
});



</script>

</body>
</html>