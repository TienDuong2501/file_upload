<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
	<div class="col-lg-offset-4 col-lg-4">
		<form action="/store" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="file" name="anh">
			<input type="submit" name="" value="upload">
		</form>
	</div>
</body>
</html>