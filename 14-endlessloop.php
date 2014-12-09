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

body {
	background: url('img/bg.jpg');
}	
#window {
	width:670px;
	height:290px;
	margin: 0 auto;
	position:relative;
	cursor:pointer;
	background:url(img/flip.png) no-repeat 0 0;
}
#endless {
	display:block;
	width:670px;
	height:290px;
	position:absolute;
	left:0;
	top:0;
	background:url(img/endless.png) no-repeat 0 100%;
}	

#loop {
	display:none;
	width:670px;
	height:290px;
	position:absolute;
	left:0;
	top:0;
	background:url(img/loop.png) no-repeat 0 100%;
}

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header" style='color: white;'>EL.IO</h1>
	</hgroup>

<div id="window">
	<div id="endless"></div>
	<div id="loop"></div>
</div>
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

$('#window').on('click', function() {
	$('#loop').effect('clip');
	// $('#loop').toggle();
})



</script>

</body>
</html>