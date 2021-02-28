@extends('master')
@section('content')

<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
            <header class="panel-heading">
                        Thêm thông tin sinh viên
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
                        <form action="{{route('save-info-student')}}" method="post" class="form-horizontal" role="form">
                            {{csrf_field()}}
                            
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Mã số SV: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="code_student" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Họ và tên SV: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="name_student" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Năm sinh: </label>
                                <div class="col-lg-10">
                                <input type="date" name="year_student" class="form-control" placeholder="dd-mm-yyyy" min="1997-01-01" max="2030-12-31" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Lớp: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="class_student" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="email_student" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Loại: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="type_student" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Chức vụ: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="position_student" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Thành tích: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="achievement_student" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Hiển thị: </label>
                                <div class="col-lg-10">
                                    <select name="status_student" id="" class="form-control">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiện</option>
                                    </select>
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