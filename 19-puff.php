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
	#confirm {
		display:block;
		width:400px;
		height:120px;
		position:absolute;
		border:1px solid #ccc;
		background:#EEE;
		font:normal 13px sans-serif;
	}
	#confirm img {
		margin:20px 20px 0 20px;
		float:left;
	}
	#confirm p { margin:40px 0 0 0; }
	#confirm button {
		width:68px;
		margin:20px 10px 0 0;
		float:right;
	}	

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Puff</h1>
	</hgroup>


<div id="confirm">
	<img src="sample-code/9642_06_code/img/help.png" alt="Help Icon">
	<p>Are you sure you want to do that?</p>
	<button>Ok</button><button>Cancel</button>
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

$("#confirm").css({
	left: $(window).width() / 2 - $("#confirm").width() / 2,
	top: $(window).height() / 2 - $("#confirm").height() / 2
});
$("#confirm, button").click(function() {
	$("#confirm").effect("puff");
});


</script>

</body>
</html>