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

    public function storeCalon(Request $request){
        $validation = $request->validate([
            'nama_customer' => ['string', 'required']
        ]);

        DB::table('CUSTOMER')
            ->insert([
                'NAMA_CUSTOMER' => $validation['nama_customer'],
                'ID_STATUS' => 1
            ]);
        return redirect()->back()->with('success', 'Customer '.$validation['nama_customer']. 'telah ditambahkan');
    }
}
