@extends('master')
@section('content')
<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-wpforms"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Danh hiệu</h4>
					<h3>{{$all_title->count()}}</h3>
				  	</div>
				  	<div class="col-md-7 market-update-right">

					</div>
					<div class="col-md-5 market-update-left">
						<br>
						<a href="{{route('all_title')}}" class="alo"><span>Xem Chi Tiết <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
					</div>
				  	<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-bookmark-o" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Hình thức</h4>
						<h3>{{$all_form->count()}}</h3>
					</div>
					<div class="col-md-7 market-update-right">
						
					</div>
					<div class="col-md-5 market-update-left">
						<br>
						<a href="{{route('all_form')}}" class="alo"><span>Xem Chi Tiết <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Tài Khoản</h4>
						<h3>{{$all_account->count()}}</h3>
					</div>
					<div class="col-md-7 market-update-right">

					</div>
					<div class="col-md-5 market-update-left">
						<br>
						<a href="" class="alo"><span>Xem Chi Tiết <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
					</div>
				  	<div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->

		<div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tất cả đề cử
                </div>
                <div>
                    <table class="table" ui-jq="footable" ui-options='{
                        "paging": {
                        "enabled": true
                        },
                        "filtering": {
                        "enabled": true
                        },
                        "sorting": {
                        "enabled": true
                        }}'>
						<thead>
						<tr>
							<th data-breakpoints="xs">Id</th>
							<th>Họ tên</th>
							<th>Hình thức</th>
							<th>Đơn vị</th>
							<th>Trạng thái</th>
							<th style="width:100px;">Chức năng</th>
						</tr>
						</thead>
						<tbody>
						@foreach($all_nomination as $key => $nomination)
						<tr>
							<td>{{$nomination->id_nomination}}</td>
							<td><span class="text-ellipsis">{{$nomination->name_nomination}}</span></td>
							<td><span class="text-ellipsis">{{$nomination->form_nomination}}</span></td>
							<td><span class="text-ellipsis">{{$nomination->unit_nomination}}</span></td>
							<td><span class="text-ellipsis">@if($nomination->status_nomination==1) Đã duyệt @else Chưa duyệt @endif </span></td>
							<td>
							<a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-eye text-primary text-active"></i></a>
							<a href="" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active"></i></a>
							<a href="" class="active" ui-toggle-class=""><i class="fa fa-trash-o text-danger text"></i></a>
							</td>
						</tr>
						@endforeach
                        </tbody>
                    </table>
					<!-- Dialog Modal sử dụng Bootstrap -->
					<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargetModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<div class="row">
										<div class="col-md-12 col-lg-12 block-info">
											<h3>Thông tin chi tiết</h3> <br>
											<strong>Năm đề cử: </strong><span>{{$nomination->year_nomination}}</span> <br>
											<strong>Họ và tên: </strong><span>{{$nomination->name_nomination}}</span> <br>
											<strong>Loại: </strong><span>{{$nomination->type_nomination}}</span> <br>
											<strong>Chức vụ: </strong><span>{{$nomination->position_nomination}}</span> <br>	
											<strong>Thành tích: </strong><span>{{$nomination->achievement_nomination}}</span> <br>
											<strong>Đề cử danh hiệu: </strong><span>{{$nomination->title_nomination}}</span> <br>
											<strong>Hình thức khen thưởng: </strong><span>{{$nomination->form_nomination}}</span> <br>
											<strong>Đơn vị duyệt: </strong><span>{{$nomination->unit_nomination}}</span> <br>
											<strong>Tài khoảng tạo: </strong><span>{{$nomination->account_create_nomination}}</span> <br>
											<strong>File minh chứng: </strong><span>{{$nomination->file_nomination}}</span> <br>
											<strong>Tình trạng: </strong><span>@if($nomination->status_nomination==1) Đã duyệt @else Chưa duyệt @endif </span>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-5 col-lg-5">

										</div>
										<div class="col-md-3 col-lg-3 text-right">
											<a href="">
												<Span>Nhận xét</Span>
											</a>
										</div>
										<div class="col-md-4 col-lg-4">
											<a href="">
												<i class="fa fa-download" aria-hidden="true"></i>
												<Span>Download PDF</Span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
</section>
@endsection