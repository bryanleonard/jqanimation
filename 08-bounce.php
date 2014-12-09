<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.3.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
#travel {
	position:absolute;
	top:100px;
	/*outline: 1px solid red;*/
}
#ball {
	width:150px;
	height:150px;
	cursor:pointer;
	background:url(sample-code/9642_06_code/img/ball.jpg) no-repeat 0 0;
}		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Effectuals</h1>
	</hgroup>

<div id="travel">
	<div id="ball"></div>
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

//$(selector).effect( effect [,options] [,duration] [,complete] );

$('#ball').on('click', function() {
	$('#travel').animate({
		left: "+=300px",
	}, 1500)
	.find('div').effect("bounce", {times: 4, distance: 100}, 1500);
})

</script>

</body>
</html>