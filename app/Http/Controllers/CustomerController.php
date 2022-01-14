<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function showCalon(){
        $data = DB::table('CUSTOMER')
            ->join('STATUS_CUSTOMER', 'STATUS_CUSTOMER.ID_STATUS', 
                '=', 'CUSTOMER.ID_STATUS')
            ->where('STATUS_CUSTOMER.ID_STATUS', 1)
            ->orWhere('STATUS_CUSTOMER.ID_STATUS', 3)
            ->get();
        
        return view('admin.calon_customer', ['datas'=>$data]);
    }

    public function storeCalon(Request $request){
        $validation = $request->validate([
            'nama_customer' => ['string', 'required'],
            'telp' => ['string', 'required']
        ]);

        DB::table('CUSTOMER')
            ->insert([
                'NAMA_CUSTOMER' => $validation['nama_customer'],
                'TELP' => $validation['telp'],
                'ID_STATUS' => 1
            ]);
        return redirect()->back()->with('success', 'Customer '.$validation['nama_customer']. 'telah ditambahkan');
    }

    public function showCustomer(){
        $data = DB::table('CUSTOMER')
            ->join('STATUS_CUSTOMER', 'STATUS_CUSTOMER.ID_STATUS', 
                '=', 'CUSTOMER.ID_STATUS')
            ->where('STATUS_CUSTOMER.ID_STATUS', 2)
            ->orWhere('STATUS_CUSTOMER.ID_STATUS', 3)
            ->get();
        
        return view('admin.customer', ['datas'=>$data]);
    }
}
