<!DOCTYPE html>
<html>
<head>
	<title>test file</title>
	<link rel="alternate" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<form action="/file" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				{{csrf_field()}}
				<input type="file" name="anh">
				<input type="submit" name="" value="submit">
			</form>
		</div>
		<div class="row">
			<h2>show</h2>
			<img src="{{ asset('storage/upload/37da0cc6d8f6cd3c414e76cefb681f1f.jpg') }}" alt="">
		</div>
	</div>
</body>
</html>