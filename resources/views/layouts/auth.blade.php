<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<!-- Font Awesome -->
  	<link rel="stylesheet" href="/css/all.min.css">
  	<!-- Ionicons -->
  	<link rel="stylesheet" href="/css/ionicons.min.css">
  	<!-- icheck bootstrap -->
  	<link rel="stylesheet" href="/css/icheck-bootstrap.min.css">
  	<!-- Theme style -->
  	<link rel="stylesheet" href="/css/adminlte.min.css">
  	<!-- Google Font: Source Sans Pro -->
  	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
	@yield('content')
	<!-- jQuery -->
	<script src="/js/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="/js/bootstrap.bundle.min.js"></script>
	<!-- Font Awesome -->
	<script src="/js/all.min.js"></script>
	<!-- AdminLTE App -->
	<script src="/js/adminlte.min.js"></script>
</body>
</html>