<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ExportExcelController extends Controller
{
    function index(){
        $users_data = DB::table('users')->get();
        return view('export_excel')->with('users_data',$users_data);
    }
    function excel()
    {
        $users_data = DB::table('users')->get()->toArray();
        $users_array[] = array('id', 'name', 'email');
        foreach($users_data as $user)
        {
            $users_array[] = array(
                'id'  => $user->id,
                'name'   => $user->name,
                'email'    => $user->email,
            );
        }
        Excel::create('Users Data', function($excel) use ($users_array){
            $excel->setTitle('Users Data');
            $excel->sheet('Users Data', function($sheet) use ($users_array){
                $sheet->fromArray($users_array, null, 'A1', false, false);
            });
        })->download('xlsx');
    }
}
