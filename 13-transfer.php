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
#install {
width:417px;
height:339px;
position:relative;
background:url(sample-code/9642_06_code/img/install.jpg) no-repeat 0 0;
}
#firefox {
width:124px;
height:121px;
position:absolute;
left:34px;
top:132px;
background:url(sample-code/9642_06_code/img/firefox.png) no-repeat 0 0;
}
#apps {
width:54px;
height:52px;
position:absolute;
right:58px;
top:172px;
background:url(sample-code/9642_06_code/img/apps.png) no-repeat 0 0;
}
.ui-effect-transfer { border:2px solid #336699; }		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Transfer</h1>
	</hgroup>


<div id="install">
<div id="firefox"></div>
<div id="apps"></div>
</div>
<p>To install the application, drag its icon over to the apps
folder icon.</p>
<button id="show">Show me</button>

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

$("#show").click(function() {
	$("#firefox").effect("transfer", {
	to: "#apps",
	className: "ui-effect-transfer"
	}, 1000);
});


</script>

</body>
</html>