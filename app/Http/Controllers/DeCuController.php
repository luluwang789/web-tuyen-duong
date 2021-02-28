<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class DeCuController extends Controller
{
    //đề cử
    public function Nomination(){
        $all_year = DB::table('tbl_year')->get(); // Lấy dữ liệu bảng năm học
        $all_form = DB::table('tbl_form')->get(); // Lấy dữ liệu hình thức
        $all_info_student = DB::table('tbl_info_student')->get(); // Lấy dữ liệu thông tin sinh viên
        $all_unit = DB::table('tbl_donvi')->get(); // Lấy dữ liệu đơn vị
        $all_account = DB::table('tbl_account')->get(); // Lấy dữ liệu đơn vị
        $all_title = DB::table('tbl_title')->get(); // Lấy dữ liệu danh hiệu

        $manager = view('page.decu.decu')->with([
            'all_year'=>$all_year,
            'all_form'=>$all_form,
            'all_info_student'=>$all_info_student,
            'all_unit'=>$all_unit,
            'all_account'=>$all_account,
            'all_title'=>$all_title
            ]); //gán dữ liệu
        
        //Lấy dữ hình thức
        return view('master')->with('page.decu.decu',$manager);

        // return view('page.decu');
    }
    public function SaveNomination(Request $req){
        $data = array();

        $data['year_nomination'] = $req->year_nomination;
        $data['name_nomination'] = $req->name_nomination;
        $data['type_nomination'] = $req->type_nomination;
        $data['position_nomination'] = $req->position_nomination;
        $data['achievement_nomination'] = $req->achievement_nomination;
        $data['title_nomination'] = $req->title_nomination;
        $data['form_nomination'] = $req->form_nomination;
        $data['unit_nomination'] = $req->unit_nomination;
        $data['account_create_nomination'] = $req->account_create_nomination;
        $data['file_nomination'] = $req->file_nomination;
        $data['status_nomination'] = $req->status_nomination;

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        DB::table('tbl_nomination')->insert($data);

        Session::put('message','Thêm đề cử thành công');
        return Redirect::to('decu');

    }
    public function AllNomination(){
        $all_nomination = DB::table('tbl_nomination')->get(); // Lấy dữ liệu
        $manager_nomination = view('page.decu.all_decu')->with('all_nomination',$all_nomination); //gán dữ liệu

        return view('master')->with('page.decu.all_decu',$manager_nomination);
    }
}
