<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HinhThucController extends Controller
{
    public function Form(){
        return view('page.hinhthuc.hinhthuc');
    }
    public function SaveForm(Request $req){
        $data = array();

        $data['name_form'] = $req->name_form;
        $data['status_form'] = $req->status_form;

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        DB::table('tbl_form')->insert($data);

        Session::put('message','Thêm hình thức thành công');
        return Redirect::to('hinhthuc');

    }
    public function AllForm(){
        $all_form = DB::table('tbl_form')->get(); // Lấy dữ liệu
        $manager_form = view('page.hinhthuc.all_hinhthuc')->with('all_form',$all_form); //gán dữ liệu

        return view('master')->with('page.hinhthuc.all_hinhthuc',$manager_form);
    }
}
