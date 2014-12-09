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
body { background-color:#3cf; }
#confirmation {
	display:none;
	width:100%;
	height:60px;
	position:absolute;
	top:0;
	left:0;
	z-index:999;
	background-color:#fff;
	text-align:center;
	font:normal 18px sans-serif;
}
#confirmation p {
	margin:0;
	position:relative;
	top:18px;
}	

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Drop</h1>
	</hgroup>

<div id="confirmation">
<p>Your request has been completed!</p>
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

$('#confirmation').effect('drop', {
	mode: 'show',
	direction: 'up'
}, function() {
	var timer = function() {
		$("#confirmation").effect("drop", { 
			mode: "hide",
			direction: "up"});
	}
	setTimeout(timer, 3000);
});
// 104

</script>

</body>
</html>