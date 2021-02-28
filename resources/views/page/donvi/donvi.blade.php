@extends('master')
@section('content')

<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
            <header class="panel-heading">
                        Thêm đơn vị
                    </header>
                    <div class="panel-body">
                        <?php	
                            $message = Session::get('message');
                            if($message){
                                echo '<p style="color: green;">'.$message.'</p>';
                                Session::put('message',null); // không cho nó hiển thị nữa
                            }
						?>
                        <div class="position-center">
                        <form action="{{route('save-unit')}}" method="post" class="form-horizontal" role="form">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Tên đơn vị: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="name_unit" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Địa chỉ đơn vị: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="address_unit" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email đơn vị: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="email_unit" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Số điện thoại đơn vị: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="phone_unit" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Số lượng đoàn cơ sở: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="base_group_number_unit" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Số lượng đoàn viên: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="number_of_member_unit" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-12 col-sm-12"><h3>Thông tin cán bộ phụ trách </h3></label>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Họ tên: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="name_manager_member_unit" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Số điện thoại: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="phone_manager_member_unit" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="email_manager_member_unit" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection