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
table {
border-spacing:0;
font:normal 13px sans-serif;
}
th, td {
text-align:left;
padding-right:20px;
}	

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Pulsate</h1>
	</hgroup>

<table class="table">
<tr>
<th>Job Number</th>
<th>Start Time</th>
<th>End Time</th>
<th colspan="2">Total</th>
</tr>
<tr>
<td>05432</td>
<td>8:00</td>
<td>8:43</td>
<td>43 minutes</td>
<td>
<a class="delete" href="#" title="Delete this item">
Delete
</a>
</td>
</tr>
<tr>
<td>05684</td>
<td>8:43</td>
<td>10:21</td>
<td>1 hour 38 minutes</td>
<td>
<a class="delete" href="#" title="Delete this item">
Delete
</a>
</td>
</tr>
<tr>
<td>05684</td>
<td>10:21</td>
<td>13:30</td>
<td>3 hour 9 minutes</td>
<td>
<a class="delete" href="#" title="Delete this item">
Delete
</a>
</td>
</tr>
</table>

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
//$(selector).effect( "pulsate", [,configuration] [,duration] );

//86
$('.delete').on('click', function(e) {
	e.preventDefault();

	var row = $(this).closest('tr');

	row.children().css({backgroundColor: '#ccc'}).effect('pulsate', function() {
		// row.fadeOut().remove();
	});
})

</script>

</body>
</html>