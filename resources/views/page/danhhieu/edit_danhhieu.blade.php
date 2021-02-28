@extends('master')
@section('content')
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
            <header class="panel-heading">
                        Cập nhật danh hiệu
                    </header>
                    <div class="panel-body">
                        <?php	
                            
						?>
                        <div class="position-center">
                            <form action="{{route('update-title')}}" method="post" class="form-horizontal" role="form">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Danh hiệu: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="name_title" class="form-control" placeholder="2019-2020" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
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