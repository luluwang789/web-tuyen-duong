@extends('master')
@section('content')
<section class="wrapper">
		<div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tất cả danh hiệu
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
                        <th>Tên danh hiệu</th>
                        <th>Trạng thái</th>
                        <th style="width:100px;">Chức năng</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_title as $key => $title)
                    <tr>    
                        <td>{{$title->id_title}}</td>
                        <td><span class="text-ellipsis">{{$title->name_title}}</span></td>
                        <td>
                            <span class="text-ellipsis">
                                @if($title->status_title == 0)
                                <a href="{{route('active-title',$title->id_title)}}"><i class="fa fa-thumbs-down text-danger" aria-hidden="true"></i></a>
                                @else
                                <a href="{{route('unactive-title',$title->id_title)}}"><i class="fa fa-thumbs-up text-success" aria-hidden="true"></i></a>
                                @endif
                            </span>
                        </td>
                        <td>
                            <a href="{{route('edit-danhhieu',$title->id_title)}}" class="active" ui-toggle-class=""><i class="fa fa-edit text-success" aria-hidden="true"></i></a> 
                            <a href="" class="active" ui-toggle-class=""><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
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