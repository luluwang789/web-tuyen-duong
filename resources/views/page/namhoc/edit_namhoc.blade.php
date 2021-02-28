@extends('master')
@section('content')
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
            <header class="panel-heading">
                        Cập nhật năm học
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
                            @foreach($edit_year as $key => $edit)
                            <form action="{{route('update-year',$edit->id_year)}}" method="post" class="form-horizontal" role="form">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Năm học: </label>
                                    <div class="col-lg-10">
                                        <input type="text" value="{{$edit->name_year}}" name="name_year" class="form-control" placeholder="2019-2020" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection