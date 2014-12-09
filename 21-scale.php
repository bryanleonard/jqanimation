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
#containerz {
	position:relative;
	float:left;
	cursor:pointer;
}
#containerz img {
	width:150px;
	height:150px;
}		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Scale</h1>
	</hgroup>

<div id="containerz">
	<img src="sample-code/9642_06_code/img/europa.jpg" alt="Europa">
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

$('img').on('click', function() {
	var img = $(this);

	if( !img.hasClass('full') ) {
		img.addClass('full').effect('scale', 
			{
				percent: 400,
				scale: 'box',
				origin: ['top', 'left']

			}
		)
	} else {
		img.removeClass('full').effect('scale', 
			{
				percent: 25,
				scale: 'box',
				origin: ['top', 'left']

			}
		)
	}
})


</script>

</body>
</html>