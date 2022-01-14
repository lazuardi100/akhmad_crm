<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show(){
        $datas = DB::table('PRODUCT')
            ->join('CUSTOMER', 'CUSTOMER.ID_PRODUCT', 'PRODUCT.ID_PRODUCT')
            ->where('CUSTOMER.ID_STATUS', 2)
            ->selectRaw('PRODUCT, COALESCE(COUNT(CUSTOMER.ID_CUSTOMER),0) AS TERJUAL')
            ->groupBy('PRODUCT')
            ->get();
            
        return view('admin.product', ['datas'=>$datas]);
    }

    public function store(Request $request){
        $validation = $request->validate([
            'nama_produk' => ['required', 'string']
        ]);

        DB::table('PRODUCT')
            ->insert([
                'PRODUCT' => $validation['nama_produk']
            ]);

        return redirect()->back();
    }
}
