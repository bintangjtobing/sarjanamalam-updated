<?php

namespace App\Http\Controllers;

// Use Illuminate
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Database

class DashboardController extends Controller
{
    public function processloginadmin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $check = DB::table('admindbs')
            ->where('username', $username)
            ->first();


        // Check User right or not
        if ($check && Hash::check($password, $check->password) && $check->status == 'active') {
            $check->isLogin = 'login';
            $check = (array)$check;
            session($check);

            // jika berhasil
            return redirect('FORUM');
        }
        // JIKA GAGAL Auth
        return back()->with('gagal', 'Please check your auth information.');
    }
    public function processloginmember(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $check = DB::table('memberdbs')
            ->where('username', $username)
            ->first();


        // Check User right or not
        if ($check && Hash::check($password, $check->password) && $check->status == 'active') {
            $check->isLogin = 'login';
            $check = (array)$check;
            session($check);

            // jika berhasil
            return redirect('FORUM');
        }
        // JIKA GAGAL Auth
        return back()->with('gagal', 'Please check your auth information.');
    }
}
