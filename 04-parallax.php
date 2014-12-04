<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
.pl {
	width:100%;
	height:1000px;
	position:absolute;
	left:0;
	top:0;
}
#background { background:url(sample-code/9642_03_code/images/background.png) repeat-x 0 0; }
#midground { background:url(sample-code/9642_03_code/images/midground.png) repeat-x 0 0; }
#foreground { background:url(sample-code/9642_03_code/images/foreground.png) repeat-x 0 0; }
#ground { background:url(sample-code/9642_03_code/images/ground.png) repeat-x 0 100%; }

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header"></h1>
	</hgroup>


<div id="background" class="pl"></div>
<div id="midground" class="pl"></div>
<div id="foreground" class="pl"></div>
<div id="ground" class="pl"></div>

			</div>
		</div>

	</div>
</div>


<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="/assets/lib/jquery-1.11.1.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script> -->
<!-- <script src="scripts.js"></script> -->

<script>

var g = $('#ground');
var bg = $("#background");
var mg = $("#midground");
var fg = $("#foreground");
$(document).keydown(function(e) {

console.log(e);

	if (e.which === 39) { //right arrow key
		// g.animate({ backgroundPosition: "-=1px"}, 0, "linear");
		bg.animate({ backgroundPosition: "-+=1px"}, 0, "linear" );
		mg.animate({ backgroundPosition: "-=10px" }, 0, "linear" );
		fg.animate({ backgroundPosition: "-=20px" }, 0, "linear" );
	}

	if (e.which === 37) { // left arrow key

	}
});

//page 45

</script>

</body>
</html>