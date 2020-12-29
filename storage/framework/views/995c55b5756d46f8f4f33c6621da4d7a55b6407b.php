<!DOCTYPE html>

<head>
	<title>Login admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- bootstrap-css -->
	<link rel="stylesheet" href="admintheme/css/bootstrap.min.css">
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="admintheme/css/style.css" rel='stylesheet' type='text/css' />
	<link href="admintheme/css/style-responsive.css" rel="stylesheet" />
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="admintheme/css/font.css" type="text/css" />
	<link href="admintheme/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<script src="admintheme/js/jquery2.0.3.min.js"></script>
</head>

<body>
	<div class="log-w3">
		<div class="w3layouts-main">
			<h2>Đăng nhập</h2>
			<?php

			use Illuminate\Support\Facades\Session;
			$message = Session::get('message');
			if($message){
				echo '<span class = "text-alert" > ',$message,'</span> ';
				Session::put('message',null);
			}
			?>

			<form action="<?php echo e(URL::to('/admin_login')); ?>" method="post">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<input type="email" class="ggg" name="admin_email" placeholder="E-MAIL" required="">
				<input type="password" class="ggg" name="admin_password" placeholder="PASSWORD" required="">
				<span><input type="checkbox" />Remember Me</span>
				<h6><a href="#">quên mật khẩu</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
			</form>
			<p>Bạn chưa có tài khoản<a href="registration.html">Đăng ký ngay</a></p>
		</div>
	</div>
	<script src="admintheme/js/bootstrap.js"></script>
	<script src="admintheme/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="admintheme/js/scripts.js"></script>
	<script src="admintheme/js/jquery.slimscroll.js"></script>
	<script src="admintheme/js/jquery.nicescroll.js"></script>
	<script src="admintheme/js/jquery.scrollTo.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\SE-04-Nhom6.1\resources\views/admin/admin_login.blade.php ENDPATH**/ ?>