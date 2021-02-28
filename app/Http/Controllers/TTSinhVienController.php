<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class TTSinhVienController extends Controller
{
    //thông tin sinh viên
    public function InfoStudent(){
        return view('page.thongtinsv.tt_sinhvien');
    }
    public function SaveInfoStudent(Request $req){
        $data = array();

        $data['code_student'] = $req->code_student;
        $data['name_student'] = $req->name_student;
        $data['year_student'] = $req->year_student;
        $data['class_student'] = $req->class_student;
        $data['email_student'] = $req->email_student;
        $data['type_student'] = $req->type_student;
        $data['position_student'] = $req->position_student;
        $data['achievement_student'] = $req->achievement_student;
        $data['status_student'] = $req->status_student;

        // // echo '<pre>';
        // // print_r($data);
        // // echo '</pre>';

        DB::table('tbl_info_student')->insert($data);

        Session::put('message','Thêm thông tin sinh viên thành công');
        return Redirect::to('tt_sinhvien');

    }
    public function AllInfoStudent(){
        $all_info_student = DB::table('tbl_info_student')->get();
        $manager_info_student = view('page.thongtinsv.all_tt_sinhvien')->with('all_info_student',$all_info_student);

        return view('master')->with('page.thongtinsv.all_tt_sinhvien',$manager_info_student);
    }
}
