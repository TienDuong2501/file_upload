<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>email</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>welcome {{ $user->email }} to my website</h1>
	<p>All Laravel là website chứa đựng rất nhiều các kiến thức, tài nguyên liên quan đến framework PHP số 1 hiện nay - Laravel. Đến với All Laravel, bạn được tham gia nhiều khóa học miễn phí với rất nhiều các ví dụ thực tế, giúp bạn nhanh chóng nắm bắt được kiến thức.</p>
	<p>Link đăng nhập hệ thống: <a href="{{ route('login') }}">Đăng nhập my website</a></p
</body>
</html>