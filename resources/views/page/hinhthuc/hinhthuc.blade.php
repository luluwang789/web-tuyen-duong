@extends('master')
@section('content')

<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
            <header class="panel-heading">
                        Thêm hình thức
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
                        <form action="{{route('save-form')}}" method="post" class="form-horizontal" role="form">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Hình thức: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="name_form" class="form-control" placeholder="2019-2020" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Hiển thị: </label>
                                <div class="col-lg-10">
                                    <select name="status_form" id="" class="form-control">
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