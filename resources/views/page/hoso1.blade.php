@extends('master')
@section('content')
<section class="wrapper">
    <div class="row">
        <div class="col-md-12">
            <div data-collapsed="0" class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        Khen thưởng cấp thành
                    </div>
                </div>
                <div class="panel-body">
                    <form action="" method="get">
                        <div class="col-md-1 form-group text-right">
                            Năm:
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" placeholder=".col-md-2" class="form-control">
                        </div>
                        <div class="col-md-2 form-group text-right">
                            Nội dung:
                        </div>
                        <div class="col-md-5 form-group">
                            <input type="text" placeholder=".col-md-2" class="form-control"> <br>
                        </div>    
                        <div class="col-md-5 form-group text-right">

                        </div>
                        <div class="col-md-2 form-group text-right">
                            Hình thức:
                        </div>
                        <div class="col-md-5 form-group">
                            <input type="text" placeholder=".col-md-2" class="form-control"> <br>
                        </div>
                        <div class="col-md-4 form-group">
                            
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="button" value="LỌC" class="btn btn-primary form-control">
                        </div>
                        <div class="col-md-4 form-group">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection