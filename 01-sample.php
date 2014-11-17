<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
#loader { margin:10px 0 0 36px; }
#loader span {
	display:block;
	width:6px;
	float:left;
	margin-right:6px;
	border:1px solid #336633;
	position:relative;
	background-color:#ccffcc;
}
#loader .bar-0 {
	height:15px;
	bottom:-20px;
}
#loader .bar-1 {
	height:25px;
	bottom:-10px;
}
#loader .bar-2 {
	height:35px;
	margin-right:0;
}		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Simple sample</h1>
	</hgroup>


<p><button id="go" class="btn btn-primary">Initiate the action</button></p>



			</div>
		</div>

	</div>
</div>


<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="/assets/lib/jquery-1.11.1.js"></script>
<!-- <script src="scripts.js"></script> -->

<script>

var loader = $('<div></div>', {
		id: 'loader'
	}).css({display: 'none'}),
	bar = $('<span></span>').css({opacity: '0.2'}),
	loadingInterval = null;

for (var i = 0; i < 3; i++) {
	bar.clone().addClass('bar-' + i).appendTo(loader);
};
loader.insertAfter("#go");

var runLoader = function() {
	var firstBar = loader.children(':first'),
		secondBar = loader.children().eq(1),
		thirdBar = loader.children(":last");

	firstBar.fadeTo('fast', 1, function() {
		firstBar.fadeTo('fast', 0.2, function() {
			secondBar.fadeTo('fast', 1, function() {
				secondBar.fadeTo('fast', 0.2, function() {
					thirdBar.fadeTo('fast', 1, function() {
						thirdBar.fadeTo('fast', 0.2, function() {
							// ya got that?
						});
					});
				});
			});
		});
	});
}

$('#go').on('click', function() {
	if ( !$('#loader').is(':visible') ) {
		loader.show();
		loadingInterval = setInterval(function() {
			runLoader();
		}, 1200)
	} else {
		loader.hide();
		clearInterval(loadingInterval);
	}
});

</script>

</body>
</html>