<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.1.1/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		
#box {
	position:relative;
	width:200px;
	height:200px;
}
#slider img {
	position:absolute;
	display:none;
	border-radius:3px;
}

#prev, #next {
	position:absolute;
	bottom:10px;
	padding:5px 10px;
	color:#000;
	background:#FFF;
	border-radius:3px;
	text-decoration:none;
	opacity:0.7;
}
#prev:hover, #next:hover {
	opacity:1;
	cursor:pointer;
}
#prev {left:10px;}
#next {right:10px;}

#pagination {
	position:absolute;
	top:10px;
	width:100%;
	text-align:center;
}
#pagination a {
	padding:2px 5px;
	color:#000;
	background:#FFF;
	border-radius:3px;
	text-decoration:none;
	opacity:0.7;
}
#pagination a:hover {
	opacity:1;
	cursor:pointer;
}

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Slider</h1>
	</hgroup>
<div id="box">
	<div id="slider">
		<img src="http://placekitten.com/200/200?image=1">
		<img src="http://placekitten.com/200/200?image=2">
		<img src="http://placekitten.com/200/200?image=3">
		<img src="http://placekitten.com/200/200?image=4">
		<img src="http://placekitten.com/200/200?image=5">
		<img src="http://placekitten.com/200/200?image=6">
		<img src="http://placekitten.com/200/200?image=7">
	</div>

	<a id="prev">prev</a>
	<a id="next">next</a>
	<div id="pagination"></div>
</div>

			</div>
		</div>

	</div>
</div>


<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script src="/assets/lib/jquery-1.11.1.js"></script>
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0/handlebars.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script> -->
<!-- <script src="scripts.js"></script> -->

<script>

var img = $('#slider').find('img');
var numSlides = img.length;
var activeSlide = 0;
var speed = 2000;
var fade = 1000;
var timer = setInterval(rotate, speed);
var pause = false;
var paging = "";

img.eq(activeSlide).show();
for (var page = 0; page < numSlides; page++) {
	paging += "<a rel=\"" + (page + 1) + "\">" + (page + 1) + "</a>\n";
}

$("#pagination").html(paging);

$("#slider, #prev, #next, #pagination").hover(function() {
	clearInterval(timer);
	pause = true;
}, function() {
	timer = setInterval(rotate, speed);
	pause = false;
});

$("#prev").on('click', function(e) {
	e.preventDefault();
	activeSlide--;
	rotate();
});
$("#next").on('click', function(e) {
	e.preventDefault();
	activeSlide++;
	rotate();
});

$("#pagination").find("a").on("click", function(e) {
	e.preventDefault();
	activeSlide = $(this).attr("rel") - 1;
	rotate();

	console.log($(this).attr("rel"));
});

function rotate() {
	if (!pause == true) {
		activeSlide++;
	}

	if (activeSlide == numSlides) activeSlide = 0;

	// fadeOut(fade);
	if (activeSlide < 0) {
		activeSlide = numSlides - 1;
	}

	img.not(activeSlide).fadeOut(fade);
	img.eq(activeSlide).fadeIn(fade);


}



</script>

</body>
</html>