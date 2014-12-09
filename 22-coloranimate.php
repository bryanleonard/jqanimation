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
		.errorz {
			border: 1px solid red !important;
			background: #f78080;
		}

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Animating color</h1>
	</hgroup>

<p><input type="text" id="txt"></p>
<p><button id='search'>Search</button></p>

<p>&nbsp;</p>



<p><input type="text" id="txt2"></p>
<p><button id='search2'>Search</button></p>


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


$('#search').on('click', function(e) {
	e.preventDefault();


	var input = $('#txt');

	input.animate({
		backgroundColor: '#f78080',
		borderColor: '#a72b2e'
	}, 1200);
});


$('#search2').on('click', function(e) {
	e.preventDefault();


	var input = $('#txt2');

	input.switchClass('','errorz', 1200);
})

</script>

</body>
</html>