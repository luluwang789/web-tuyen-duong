<!DOCTYPE html>
<head>
<title>Bảng điều khiển | Tuyên dương</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/source1/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- logo-ico -->
<link rel="icon" type="image/png" href="{{asset('public/source1/images/logo.ico')}}"/>
<!-- Custom CSS -->
<link href="{{asset('public/source1/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/source1/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/source1/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/source1/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('public/source1/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset('public/source1/css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{asset('public/source1/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('public/source1/js/raphael-min.js')}}"></script>
<script src="{{asset('public/source1/js/morris.js')}}"></script>
</head>
<body>
<section id="container">
@include('header')
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{route('home')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Bảng điều khiển</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('info')}}">
                        <i class="fa fa-users"></i>
                        <span>Thông tin đơn vị</span>
                    </a>
                </li>
				<li class="khenthuong">
					<i class="fa fa-star ickt"></i>
					<span>Admin</span>
                </li>
				<li class="sub-menu">
					<a href="javascript:;">
						<span>Năm học</span>
					</a>
					<ul class="sub">
						<li><a href="{{route('year')}}">Thêm năm học</a></li>
						<li><a href="{{route('all_year')}}">Tất cả năm học</a></li>
					</ul>
				</li>
				<li class="sub-menu">
					<a href="javascript:;">
						<span>Danh hiệu</span>
					</a>
					<ul class="sub">
						<li><a href="{{route('title')}}">Thêm danh hiệu</a></li>
						<li><a href="{{route('all_title')}}">Tất cả danh hiệu</a></li>
					</ul>
				</li>
				<li class="sub-menu">
					<a href="javascript:;">
						<span>Hình thức</span>
					</a>
					<ul class="sub">
						<li><a href="{{route('form')}}">Thêm hình thức</a></li>
						<li><a href="{{route('all_form')}}">Tất cả hình thức</a></li>
					</ul>
				</li>
				<li class="sub-menu">
					<a href="javascript:;">
						<span>Đơn vị</span>
					</a>
					<ul class="sub">
						<li><a href="{{route('donvi')}}">Thêm đơn vị</a></li>
						<li><a href="{{route('all_donvi')}}">Tất cả đơn vị</a></li>
					</ul>
				</li>
				<li class="sub-menu">
					<a href="javascript:;">
						<span>Thông tin sinh viên</span>
					</a>
					<ul class="sub">
						<li><a href="{{route('info_student')}}">Thêm thông tin</a></li>
						<li><a href="{{route('all_info_student')}}">Tất cả thông tin</a></li>
					</ul>
				</li>
				<li class="sub-menu">
					<a href="javascript:;">
						<span>Đề cử</span>
					</a>
					<ul class="sub">
						<li><a href="{{route('nomination')}}">Thêm đề cử</a></li>
						<li><a href="{{route('all_nomination')}}">Tất cả đề cử</a></li>
					</ul>
				</li>
                <li class="khenthuong">
					<i class="fa fa-star ickt"></i>
					<span>Khen thưởng</span>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <span>Cấp thành đoàn</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{route('hoso1')}}">Hồ sơ của đơn vị</a></li>
						<li><a href="{{route('hoso2')}}">Phản hồi của cấp thành</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <span>Cấp trung ương</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{route('hoso3')}}">Quản lý đề xuất</a></li>
						<li><a href="{{route('hoso4')}}">Phản hồi của cấp thành</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('user')}}">
                        <i class="fa fa-user"></i>
                        <span>Tạo tài khoảng phụ</span>
                    </a>
                </li>
            </ul>            
		</div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	@yield('content')
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>©Copyright 2020. Reserved | Design by <a href="https://facebook.com/duchoaitran789">HoaiDuc</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="{{asset('public/source1/js/bootstrap.js')}}"></script>
<script src="{{asset('public/source1/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/source1/js/scripts.js')}}"></script>
<script src="{{asset('public/source1/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/source1/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/source1/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="{{('public/source1/js/monthly.js')}}"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
