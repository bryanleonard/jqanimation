<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>

	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css"> -->
	<link rel="stylesheet" href="/assets/lib/bootstrap-3.3.0/css/bootstrap.css">
	<!-- <link rel="stylesheet" href="styles.css" type="text/css"> -->

	<style>
		

input {
	display:block;
	width:200px;
	padding:10px;
	border-radius:3px;
	background:#F5F5F5;
	border:1px solid #D5D5D5;
}
input[type=submit] {
	width:auto;
	border:0;
	color:#FFF;
	text-transform:uppercase;
}
input:focus,
button:focus { outline:0; }

button,
input[type=submit] {
	background:#FF6B6B;
	border:1px solid #FF3A3A;
	padding:10px;
	border-radius:3px;
	color: #fff;
}

button:hover {
	background: #ff8080;
}

button:active {
	background: #E76262;
}

.hover {border:1px solid #FF7F7F;}
.focus {
	background:#FFD8D8;
	border:1px solid #FF7F7F;
}


#form2 input.hover {border:1px solid #7FA1D1;}
#form2 input.focus {
	background:#E6F0FF;
	border:1px solid #7FA1D1;
}
#form2 input[type=submit],
#form2 button {
	background:#8FACD7;
	border:1px solid #638CC7;
}
#form2 .error {border:1px dashed #F00;}



	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Form animations</h1>
	</hgroup>

<form id="form1">
	<p><input type="text" placeholder="First Name"></p>
	<p><input type="text" placeholder="Last Name"></p>
	<p><input type="text" placeholder="Email Address"></p>
	<p><input type="text" placeholder="Phone Number"></p>
	<p><button id="form1btn">Submit</button></p>
</form>

<p>&nbsp;</p>

<form id="form2">
	<p><input type="text" placeholder="First Name"></p>
	<p><input type="text" placeholder="Last Name"></p>
	<p><input type="text" placeholder="Email Address"></p>
	<p><input type="text" placeholder="Phone Number"></p>
	<p><button id="form2btn">Submit</button></p>
</form>

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

$('input')
	.hover(
		function() {
			$(this).addClass('hover', 300);
		},
		function() {
			$(this).removeClass('hover', 300);
		}
	)
	.focus(
		function() {
			$(this).addClass('focus', 300);
		}
	)
	.blur(function() {
			$(this).removeClass('focus', 300);
		}
	);


$('#form1btn').on('click', function(e) {
	e.preventDefault();

	var msg = '';
	var field = $('#form1').find('input');

	for (var i=0; i < field.length; i++) {
	    if( field[i].value == "" ) {
	    	msg += '<li>' + $(field[i]).attr('placeholder') + " can\'t be left blank.</li>";
	    }
	};

	if(msg) {
		$('hgroup').append('<div class="alert alert-warning" role="alert"><ul>' + msg + '</ul></div>').hide().fadeIn();
	} else {
		$('.alert').fadeOut(175);
	}


});

$('#form2btn').on('click', function(e) {
	e.preventDefault();

	var field = $('#form2').find('input');

	for (var i=0; i < field.length; i++) {
	    if( field[i].value == "" ) {
	    	// msg += '<li>' + $(field[i]).attr('placeholder') + " can\'t be left blank.</li>";
	    	$(field[i]).addClass('error');
	    	// $("form").effect("bounce", { direction:"right", easing:"linear" },500);
	    } else {
	    	$(field[i]).removeClass('error')
	    }
	};


});

// 73

</script>

</body>
</html>