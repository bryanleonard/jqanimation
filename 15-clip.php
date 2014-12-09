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
#tv {
	width:300px;
	height:269px;
	position:relative;
	cursor:pointer;
	background:url(sample-code/9642_06_code/img/tv.png) no-repeat 0 0;
}

#bg {
	width:220px;
	height:180px;
	position:absolute;
	left:42px;
	top:30px;
	z-index:-2;
	background-color:#000;
}
#static {
	width:216px;
	height:178px;
	position:absolute;
	left:44px;
	top:31px;
	z-index:-1;
	background:url(sample-code/9642_06_code/img/static.gif) no-repeat 0 0;
}	

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Clip</h1>
	</hgroup>


<div id="tv">
	<div id="bg"></div>
	<div id="static"></div>
</div>
<br>
<p>Wow that's dumb.</p>
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

$("#tv").click(function() {
	$("#static").effect("clip");
});


</script>

</body>
</html>