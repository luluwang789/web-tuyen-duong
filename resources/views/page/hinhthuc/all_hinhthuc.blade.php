@extends('master')
@section('content')
<section class="wrapper">
		<div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tất cả hình thức
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                            
                    </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>
                    </div>
                </div>
                </div>
                <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên hình thức</th>
                        <th>Trạng thái</th>
                        <th style="width:100px;">Chức năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_form as $key => $form)
                    <tr>    
                        <td>{{$form->id_form}}</td>
                        <td><span class="text-ellipsis">{{$form->name_form}}</span></td>
                        <td><span class="text-ellipsis">@if($form->status_form == 0) Ẩn @else Hiện @endif</span></td>
                        <td>
                        <a href="" class="active" ui-toggle-class=""><i class="fa fa-eye text-primary text-active"></i></a>
                        <a href="" class="active" ui-toggle-class=""><i class="fa fa-edit text-success text-active"></i></a>
                        <a href="" class="active" ui-toggle-class=""><i class="fa fa-trash-o text-danger text"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        
                        <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                        </div>
                        <div class="col-sm-7 text-right text-center-xs">                
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>
@endsection