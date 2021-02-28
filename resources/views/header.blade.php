
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{route('home')}}" class="logo">
		<div class="row market-update-gd">
			<div class="col-sm-3 market-update-right">
				<img src="{{asset('public/source1/images/logoDoan.png')}}" alt="logoDoan">
			</div>
			<div class="col-sm-7 market-update-left">
				<span>Trường đại học sư phạm thành phố Hồ Chí Minh</span> 
			</div>
		</div>
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{asset('public/source1/images/2.png')}}">
                <span class="username">
                    <?php
						$name = Session::get('name');
						if($name){
							echo $name;
						}
					?>
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="{{route('info')}}"><i class=" fa fa-suitcase"></i>Thông tin cá nhân</a></li>
                <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Đăng xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->