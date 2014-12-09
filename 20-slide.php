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
#image {
	position:relative;
	float:left;
}
#image img { margin-bottom:-5px; }
#image div {
	display:none;
	width:100%;
	padding:10px 0;
	position:absolute;
	left:0;
	bottom:0;
	top:auto!important;
	text-align:center;
	font-style:italic;
	background-color:#000;
	color:#fff;
}

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Slide something or other</h1>
	</hgroup>

<div id="image">
	<img src="sample-code/9642_06_code/img/mantis.jpg">
	<div>Praying Mantis: Insect to the stars.</div>
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

// 116

var showIt = function() {
	$('#image').find('div').stop(true,true).show('slide');
	console.log('hi');
};

var hideIt = function() {
	$('#image').find('div').stop(true, true).hide('slide');
};

$('#image').hover(showIt, hideIt);

</script>

</body>
</html>