<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loggingin(Request $request){
        $validation = $request->validate([
            'email' => ['required', 'email'],
            'pass' => ['required', 'string']
        ]);

        $account = DB::table('ACCOUNT')
            ->where('EMAIL', $validation['email'])
            ->first();

        // dd($account);
        if($account){
            if(Hash::check($validation['pass'], $account->PASS)){
                session([
                    'role' => $account->ID_ROLE,
                    'email' => $validation['email']
                ]);
                if($account->ID_ROLE == 1)
                    return redirect()->route('dashboard.calonCus');
                if($account->ID_ROLE == 2)
                    return redirect()->route('dashboard.approval');
            }
        }

        return redirect()->back()->with('failed', 'Gagal login silahkan cek kembali');
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('auth.login');
    }
}
