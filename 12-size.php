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
#dock {
width:380px;
height:90px;
position:fixed;
bottom:0;
background:url(sample-code/9642_06_code/img/dock.png) no-repeat 0 0;
}
.icon {
position:absolute;
top:-15px;
left:44px;
}
.icon img { border:none; }
#mail { left:108px; }
#safari { left:170px; }
#firefox { left:229px; }
#itunes { left:289px; }		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Resize</h1>
	</hgroup>

<div id="dock">
	<a href="#" class="icon" id="finder">
	<img src="sample-code/9642_06_code/img/finder.png"></a>
	<a href="#" class="icon" id="mail">
	<img src="sample-code/9642_06_code/img/mail.png"></a>
	<a href="#" class="icon" id="safari">
	<img src="sample-code/9642_06_code/img/safari.png"></a>
	<a href="#" class="icon" id="firefox">
	<img src="sample-code/9642_06_code/img/firefox_small.png"></a>
	<a href="#" class="icon" id="itunes">
	<img src="sample-code/9642_06_code/img/itunes.png"></a>
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

// $('.icon', '#dock').hover(function() {
// 	$('this').stop().animate({
// 		top: -31
// 	}).find('img').stop().effect('size', {scale: 'box', to: {width: 64, height: 64}})
// })

$(".icon", "#dock").hover(function() {
	$(this).stop().animate({
			top: -31
		})
		.find("img").stop().effect("size", { scale: "box", to: { width: 64, height: 64 }
	});
}, function() {
	$(this).stop().animate({
		top: -15
	})
	.find("img").stop().effect("size", {
	scale: "box", to: { width: 48, height: 48 }
	});
});



</script>

</body>
</html>