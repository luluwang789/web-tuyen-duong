<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập | Tuyên dương</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{('public/source1/images/logo.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('public/source2/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('public/source2/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('public/source2/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{('public/source2/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('public/source2/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('public/source2/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{('public/source2/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
	
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{('public/source2/images/img-01.png')}}" alt="IMG">
				</div>
				<form action="{{route('manager-home')}}" class="login100-form validate-form" method="post">
				{{csrf_field()}}
					<span class="login100-form-title" 
						style="font-family: 'Josefin Sans', sans-serif;
								font-weight: 700;
								font-size: 28px;
								line-height: 1.2;
								color: #333333;
								text-align: center;
								display: block;
								width: 100%;
								padding-bottom: 54px;"> Quản lý khen thưởng
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="ok" type="submit">
							Đăng nhập
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Quên
						</span>
						<a class="txt2" href="#">
							mật khẩu?
						</a>
					</div>

					<div class="text-center p-t-30">
						<?php	
						$message = Session::get('message');
						if($message){
							echo '<p style="color: red;">'.$message.'</p>';
							Session::put('message',null); // không cho nó hiển thị nữa
						}
						?>
					</div>

					<div class="text-center p-t-60">
						<a class="txt2" href="#">
							Tạo tài khoản mới
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{('public/source2/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{('public/source2/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{('public/source2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{('public/source2/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{('public/source2/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{('public/source2/js/main.js')}}"></script>

</body>
</html>