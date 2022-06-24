<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\Models\Crew;

class LogiController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function authenticate(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        // $credentials = $request->validate([
        //     'UserId' => ['required'],
        //     'Password' => ['required'],
        // ]);
        // if (Auth::attempt($credentials)) {
            $data = Crew::where('username', $username)->first();
            if($data){ //apakah email tersebut ada atau tidak
                if($data->password==($password)){
                    Session::put('name',$data->nama_petugas);
                    Session::put('username',$data->username);
                    Session::put('level',$data->level);
                    Session::put('login',TRUE);
               
                    if ($data->level=='admin') {
                        return redirect('crew');
                        
                    }elseif ($data->level=='petugas') {
                        return redirect('pengaduan');
                    }
                
        // return "user dan password cocok";
                }
        // return "user ditemukan";
            }else{
                return redirect()->back()->with('loginError','User Tidak Ditemukan !');
            }
        // }

//  return $UserId;
        
    }
    public function logout()
    {
        Session::put('name',"");
        Session::put('username',"");
        Session::put('login',FALSE);
        Session::put('loginError',FALSE);
        

        return redirect('/');
    }
}
