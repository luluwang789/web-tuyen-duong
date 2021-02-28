@extends('master')
@section('content')

<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <header class="panel-heading">
                    Tạo tài khoản
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Username</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputUsername" placeholder="Username" pattern=".{6,}"
                                    title="Tên tài khoản phải chứa hơn 6 ký tự hoặc nhiều hơn" required>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-10">
                                    <p>Tài khoản phải có hơn 6 ký tự</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 col-sm-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                            title="Mật khẩu phải chứa 8 hoặc nhiều ký tự có ít nhất một số và một chữ hoa và chữ thường" required>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-10">
                                    <p>Mật khẩu phải có hơn 6 ký tự (Bao gồm ký tự đặc biệt, chữ Hoa, chữ Thường)</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary">Tạo TK</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách tài khoản
                </div>
                <div>
                    <table class="table" ui-jq="footable" ui-options='{
                        "paging": {
                        "enabled": true
                        },
                        "filtering": {
                        "enabled": true
                        },
                        "sorting": {
                        "enabled": true
                        }}'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tài khoảng</th>
                                <th>Quyền</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dennise</td>
                            <td>Fuhrman</td>
                            <td>
                                <a href=""><i class="fa fa-edit"></i></a>
                                <a href=""><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Elodia</td>
                            <td>Weisz</td>
                            <td>
                                <a href=""><i class="fa fa-edit"></i></a>
                                <a href=""><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection