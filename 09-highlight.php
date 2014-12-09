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
#todo {
width:208px;
font:normal 13px sans-serif;
}
#todo ul {
padding:0;
margin-bottom:30px;
}
#todo li { list-style-type:none;}
#todo label {
display:block;
border-bottom:1px dotted #000;
 padding-bottom: 4px;
}
li input {
position:relative;
top:0px;

}
input { margin-right:10px; }		

	</style>
</head>
<body>

<div class="container">
	<div class="container-fluid">
		
		<div class="row">

			<div class="col-xs-12">
	
	<hgroup>
		<h1 class="page-header">Higlight</h1>
	</hgroup>

<div id="todo">
<h2>Todo List</h2>
<ul>
<li><label><input type="checkbox">Item 1</label></li>
<li><label><input type="checkbox">Item 2</label></li>
<li><label><input type="checkbox">Item 3</label></li>
</ul>
<input type="text" id="new">
<button id="add">Add</button>
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

$("#add").click(function() {
	var newItem = $("#new"),
	text = newItem.val();

	if (text) {
		var li = $("<li>"),
		label = $("<label>").html("<input type=\"checkbox\">" + text).appendTo(li);
		li.appendTo("#todo ul").effect("highlight", 2000);
		newItem.val("");
	}
	// prevent the form from submitting
	return false;
});


</script>

</body>
</html>