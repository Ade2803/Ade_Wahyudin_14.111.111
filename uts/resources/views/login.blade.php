@section('content')
<html>
<head><title>CRUD</title>

<link href="css/style.css" rel="stylesheet">

</head>
<body>
<div class="container">
	<header>
		<BR><br><br>
	</header>
		
	<br>
	<center><img src="S.jpg" width="100px" height="100px"></center>
		<center>
		<table class="table table-striped table-hover">	
		<form method="POST">
			<tr>
			<td style="margin-top: 10px;">
			<center><input type="text" name="user" placeholder="Username" class="lg" size="40"/></center>
			</td>
			</tr>
			<tr>
			<td style="margin-top: 10px;">
			<input type="password" name="pass" placeholder="Password" class="lg" size="40" />
			</td>
			</tr>
			<tr>
			<td  style="margin-top: 10px;">
			<center><input type="submit" name="login" value="Login"/></center>
			</td>
			</tr>
			<br>
		
	
	</form>
		</table></center>
	<br><br><br>
	<footer>Copyright@Ade Wahyudin - 14.111.111</footer>
</body>
</html>
