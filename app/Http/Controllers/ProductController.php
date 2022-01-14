<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show(){
        $datas = DB::table('PRODUCT')
            ->join('CUSTOMER_PRODUCT', 'CUSTOMER_PRODUCT.ID_PRODUCT', '='. 'PRODUCT.ID_PRODUCT')
            ->selectRaw('PRODUCT, COUNT(CUSTOMER_PRODUCT.CUSTOMER)')
            ->groupBy('PRODUCT')
            ->get();
        return view('admin.product', ['datas'=>$datas]);
    }
}
