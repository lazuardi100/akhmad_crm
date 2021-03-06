<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprovalController extends Controller
{
    public function show(){
        $datas = DB::table('CUSTOMER')
            ->join(
                'STATUS_CUSTOMER',
                'STATUS_CUSTOMER.ID_STATUS',
                '=',
                'CUSTOMER.ID_STATUS'
            )
            ->join('PRODUCT', 'PRODUCT.ID_PRODUCT', 'CUSTOMER.ID_PRODUCT')
            ->where('STATUS_CUSTOMER.ID_STATUS', 4)
            ->orderBy('NAMA_CUSTOMER')
            ->get();
        return view('manager.approval', ['datas'=>$datas]);
    }

    public function approve($id){
        DB::table('CUSTOMER')
            ->where('ID_CUSTOMER', $id)
            ->update([
                'ID_STATUS' => 2
            ]);
        return redirect()->back();
    }

    public function reject($id){
        DB::table('CUSTOMER')
            ->where('ID_CUSTOMER', $id)
            ->update([
                'ID_STATUS' => 3
            ]);
        return redirect()->back();
    }
}
