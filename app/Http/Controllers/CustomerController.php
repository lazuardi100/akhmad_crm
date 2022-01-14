<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function showCalon(){
        $data = DB::table('CUSTOMER')
            ->where('ID_STATUS', 1)
            ->get();

        return view('admin.calon_customer', ['datas'=>$data]);
    }
}
