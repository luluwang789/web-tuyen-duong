<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class PageController extends Controller
{
    public function GetDashboard(){
        $all_form = DB::table('tbl_form')->get(); // Lấy dữ liệu hình thức
        $all_account = DB::table('tbl_account')->get(); // Lấy dữ liệu đơn vị
        $all_title = DB::table('tbl_title')->get(); // Lấy dữ liệu danh hiệu
        $all_nomination = DB::table('tbl_nomination')->get(); // Lấy dữ liệu de cu

        $manager = view('page.trangchu')->with([
            'all_form'=>$all_form,
            'all_account'=>$all_account,
            'all_title'=>$all_title,
            'all_nomination'=>$all_nomination
            ]); //gán dữ liệu
        
        //Lấy dữ hình thức
        return view('master')->with('page.trangchu',$manager);
    }
    public function PostDashboard(Request $req){
        $name = $req->username;
        $pass = md5($req->password);

        $result = DB::table('tbl_account')->where('name',$name)->where('password',$pass)->first();
        
        if($result){
            Session::put('name',$result->name);
            Session::put('id',$result->id);    
            Session::put('alert','<script>alert("Hello! '.$name.'");</script>');    
            return Redirect::to('/dashboard');
        }
        else{
            Session::put('message','Tài khoản hoặc mật khẩu sai, vui lòng nhập lại');
            return Redirect::to('/login');
        }
    }
    // đăng xuất
    public function LogOut(){
        Session::put('name',null);
        Session::put('id',null);
        return Redirect::to('/login');
    }
    // đăng nhập
    public function GetLogin(){
        return view('dangnhap');
    }
    public function File1(){
        return view('page.hoso1');
    }
    public function File2(){
        return view('page.hoso2');
    }
    public function File3(){
        return view('page.hoso3');
    }
    public function File4(){
        return view('page.hoso4');
    }
    public function Info(){
        return view('page.donvi.thongtin');
    }
    public function User(){
        return view('page.nguoidung.nguoidung');
    }
}
