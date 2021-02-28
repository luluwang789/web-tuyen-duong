@extends('master')
@section('content')

<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div data-collapsed="0" class="panel">
                <div class="panel-body">
                    <h3>Thông tin đơn vị</h3> <br>
                    <p><a href="">Tuyên dương Tp.Hồ Chí Minh</a> / <a href="">Thông tin đơn vị</a></p>
                </div>
                <div class="panel-heading" style="height: 140px; padding-top:10px; margin-left:10px; margin-right:10px;">
                    <div class="col-sm-2">
                        <img src="{{('public/source1/images/logoDoan.png')}}" alt="" style="width:120px; height:120px;">
                    </div>
                    <div class="col-sm-10 text-left" style="padding-top:30px; font-size:35px;">
                        Đoàn Trường Đại học Sư phạm TP.HCM
                    </div>
                </div>
                <br> <br> <br>
                <div class="panel-body">
                    <div class="col-sm-3 text-right">
                        <label for="">Đơn vị cấp trên trực tiếp :</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-sm-2 text-right">
                        <label for="">Địa chỉ CQ :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"> <br>
                    </div>
                    <div class="col-sm-3 text-right">
                        <label for="">Số điện thoại :</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-sm-2 text-right">
                        <label for="">Email :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"> <br>
                    </div>
                    <div class="col-sm-3 text-right">
                        <label for="">Số lượng cơ sở đoàn :</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-sm-2 text-right">
                        <label for="">Số lượng đoàn viên:</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"> <br>
                    </div>
                    <div class="col-sm-12">
                        <hr style="height:1px;border:none;color:#333;background-color:#333;" />
                    </div>
                    <div class="col-md-12"><H4>THÔNG TIN CÁN BỘ PHỤ TRÁCH </H4><br> <br></div>
                    <div class="col-sm-1 text-right">
                        <label for="">Họ tên :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-sm-2 text-right">
                        <label for="">Số điện thoại :</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control"> <br> <br>
                    </div>
                    <div class="col-sm-1 text-right">
                        <label for="">Email :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"> <br> <br>
                    </div>
                    <div class="col-md-4 form-group">    
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="button" value="LƯU" class="btn btn-primary form-control">
                    </div>
                    <div class="col-md-4 form-group">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection