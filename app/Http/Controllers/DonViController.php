<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class DonViController extends Controller
{
    public function Unit()
    {
        # code...
        return view('page.donvi.donvi');
    }
    public function SaveUnit(Request $req)
    {
        # code...
        $data = array();

        $data['name_unit'] = $req->name_unit;
        $data['address_unit'] = $req->address_unit;
        $data['email_unit'] = $req->email_unit;
        $data['phone_unit'] = $req->phone_unit;
        $data['base_group_number_unit'] = $req->base_group_number_unit;
        $data['number_of_member_unit'] = $req->number_of_member_unit;
        $data['name_manager_member_unit'] = $req->name_manager_member_unit;
        $data['phone_manager_member_unit'] = $req->phone_manager_member_unit;
        $data['email_manager_member_unit'] = $req->email_manager_member_unit;

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        DB::table('tbl_donvi')->insert($data);

        Session::put('message','Thêm đơn vị thành công');
        return Redirect::to('donvi');
    }
    public function AllUnit()
    {
        # code...
        $all_unit = DB::table('tbl_donvi')->get(); // Lấy dữ liệu
        $manager_unit = view('page.donvi.all_donvi')->with('all_unit',$all_unit); //gán dữ liệu

        return view('master')->with('page.donvi.all_donvi',$manager_unit);
    }
}
