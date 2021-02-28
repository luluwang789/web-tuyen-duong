<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class DanhHieuController extends Controller
{
    public function Title(){
        return view('page.danhhieu.danhhieu');
    }
    public function SaveTitle(Request $req){
        $data1 = array();

        $data1['name_title'] = $req->name_title;
        $data1['status_title'] = $req->status_title;

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        DB::table('tbl_title')->insert($data1);

        Session::put('message','Thêm danh hiệu thành công');
        return Redirect::to('danhhieu');
    }
    public function AllTitle(){
        $all_title = DB::table('tbl_title')->get(); // Lấy dữ liệu
        $manager_title = view('page.danhhieu.all_danhhieu')->with('all_title',$all_title); //gán dữ liệu

        return view('master')->with('page.danhhieu.all_danhhieu',$manager_title);
    }
    public function ActiveTitle($id_title){
        DB::table('tbl_title')->where('id_title',$id_title)->update(['status_title'=>1]);

        return Redirect::to('tatca_danhhieu');
    }
    public function UnActiveTitle($id_title){
        DB::table('tbl_title')->where('id_title',$id_title)->update(['status_title'=>0]);

        return Redirect::to('tatca_danhhieu');
    }
    public function EditTitle($id_title){
        $edit_title = DB::table('tbl_title')->where('id_title',$id_title)->get();

        $manager  = view('page.danhhieu.edit_danhhieu')->with('edit_title',$edit_title);

        return view('master')->with('page.danhhieu.edit_danhhieu', $manager);
    }
    public function UpdateTitle($id_title){

    }
}
