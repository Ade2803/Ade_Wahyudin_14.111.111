@section('content')		
<html>
<head><title>CRUD</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device=width, initial-scale=1">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<header>
		<h3>CRUD Operation</h3>
	</header>
	<nav>
		<ul>
			<li><b>MENU</b></li><br>
			<li>Menu 1</a></li>
			<li>Menu 2</a></li>
			<li>Menu 3</a></li>
		</ul>
	</nav>
	<article>
		
	<form class="form-horizontal" name="input" method="POST" action="">
		<div class="form-group">
			<label class="col-sm-3 control-label">NIM :</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nim" maxlenght="10" placeholder="NIM" >
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Name :</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nama" maxlenght="50" placeholder="Name" required>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Address :</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="alamat" maxlenght="50" placeholder="Address" required>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">&nbsp;</label>
			<div class="col-sm-6">
				<input class="btn btn-sm btn-primary" name="add" type="submit" value="Save">
				<a href="index.php" class="btn btn-sm btn-danger">Back</a>
			</div>
		</div>
	</form>
	</article>
	<footer>Copyright@Ade Wahyudin - 14.111.111</footer>
</div>
</body>
</html>