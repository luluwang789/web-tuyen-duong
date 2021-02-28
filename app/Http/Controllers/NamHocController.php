<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class NamHocController extends Controller
{
    //năm học
    public function Year(){
        return view('page.namhoc.namhoc');
    }
    public function SaveYear(Request $req){
        $data = array();

        $data['name_year'] = $req->name_year;
        $data['status_year'] = $req->status_year;
        DB::table('tbl_year')->insert($data);

        Session::put('message','Thêm năm học thành công');
        return Redirect::to('namhoc');

    }
    public function AllYear(){
        $all_year = DB::table('tbl_year')->get(); // Lấy dữ liệu
        $manager_year = view('page.namhoc.all_namhoc')->with('all_year',$all_year); //gán dữ liệu

        return view('master')->with('page.namhoc.all_namhoc',$manager_year);
    }

    public function UnActiveYear($id_year){
        DB::table('tbl_year')->where('id_year',$id_year)->update(['status_year'=>1]);

        return Redirect::to('tatca_namhoc');
    }
    public function ActiveYear($id_year){
        DB::table('tbl_year')->where('id_year',$id_year)->update(['status_year'=>0]);

        return Redirect::to('tatca_namhoc');
    }
    public function EditYear($id_year){
        $edit_year = DB::table('tbl_year')->where('id_year',$id_year)->get();

        $manager  = view('page.namhoc.edit_namhoc')->with('edit_year',$edit_year);

        return view('master')->with('page.namhoc.edit_namhoc', $manager);
    }
    public function UpdateYear(Request $req,$id_year){
        $arr = array();
        $arr['name_year'] = $req->name_year;

        DB::table('tbl_year')->where('id_year',$id_year)->update($arr);

        // Session::put('message','Cập nhật năm học thành công');

        return Redirect::to('tatca_namhoc');
    }
    public function DeleteYear($id_year){
        DB::table('tbl_year')->where('id_year',$id_year)->delete();

        // Session::put('message','Cập nhật năm học thành công');

        return Redirect::to('tatca_namhoc');
    }
}
