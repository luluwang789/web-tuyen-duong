@extends('master')
@section('content')
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
            <header class="panel-heading">
                        Thêm đề cử
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
                        <form action="{{route('save-nomination')}}" method="post" class="form-horizontal" role="form">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Năm học: </label>
                                <div class="col-lg-10">
                                    <select name="year_nomination" id="" class="form-control">
                                        @foreach($all_year as $key => $year)
                                        @if($year->status_year == 1)
                                        <option value="{{$year->name_year}}">{{$year->name_year}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Họ tên: </label>
                                <div class="col-lg-10">
                                    <select name="name_nomination" id="" class="form-control">
                                        @foreach($all_info_student as $key => $info_student)
                                        <option value="{{$info_student->name_student}}">{{$info_student->name_student}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Loại: </label>
                                <div class="col-lg-10">
                                    <select name="type_nomination" id="" class="form-control">
                                        @foreach($all_info_student as $key => $info_student)
                                        <option value="{{$info_student->type_student}}">{{$info_student->type_student}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Chức vụ: </label>
                                <div class="col-lg-10">
                                    <select name="position_nomination" id="" class="form-control">
                                        @foreach($all_info_student as $key => $info_student)
                                        <option value="{{$info_student->position_student}}">{{$info_student->position_student}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Thành tích: </label>
                                <div class="col-lg-10">
                                    <select name="achievement_nomination" id="" class="form-control">
                                        @foreach($all_info_student as $key => $info_student)
                                        <option value="{{$info_student->achievement_student}}">{{$info_student->achievement_student}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Đề cử danh hiệu: </label>
                                <div class="col-lg-10">
                                    <select name="title_nomination" id="" class="form-control">
                                        @foreach($all_title as $key => $title)
                                        <option value="{{$title->name_title}}">{{$title->name_title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Hình thức khen thưởng: </label>
                                <div class="col-lg-10">
                                    <select name="form_nomination" id="" class="form-control">
                                        @foreach($all_form as $key => $form)
                                        @if($form->status_form == 1)
                                        <option value="{{$form->name_form}}">{{$form->name_form}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Đơn vị duyệt: </label>
                                <div class="col-lg-10">
                                    <select name="unit_nomination" id="" class="form-control">
                                        @foreach($all_unit as $key => $unit)
                                        <option value="{{$unit->name_unit}}">{{$unit->name_unit}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Tài khoảng tạo: </label>
                                <div class="col-lg-10">
                                    <select name="account_create_nomination" id="" class="form-control">
                                        @foreach($all_account as $key => $account)
                                        <option value="{{$account->name}}">{{$account->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">File minh chứng: </label>
                                <div class="col-lg-10">
                                <input type="file" class="form-control" name="file_nomination" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Hiển thị: </label>
                                <div class="col-lg-10">
                                    <select name="status_nomination" id="" class="form-control">
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