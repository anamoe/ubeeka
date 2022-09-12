<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
       return view('auth.login');
    }
    public function register()
    {
       return view('auth.register');
    }

    public function postlogin(Request $request)
    {
        $input = $request->all();

        if (User::where('email', '=', $input['email'])->first() == true) {
            if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
                switch (Auth::user()->role) {
                     case 'superadmin':
                        return redirect('/admin_home')->with('message', 'Berhasil Login');
                        break;
                     // case 'pegunjung':
                     //    return redirect('/home')->with('message', 'Berhasil Login Sebagai Admin');
                     //    break;   
                     // case 'dokter':
                     // return redirect('/home')->with('message', 'Berhasil Login Sebagai Admin');
                     //    break;    
                     // case 'admin_klinik':
                     // return redirect('/home')->with('message', 'Berhasil Login Sebagai Admin');
                     //    break;     
                     default:
                        return redirect('/login')->with('error', 'Email atau Password Salah');
                        break;
                }
            } else {
                return redirect()->back()
                    ->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()
                ->with('error', 'Email tidak ada atau belum terdaftar');
        }
    }
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }

    public function postregister(Request $request)
    {


        if($request->password!=$request->ulang_password){
            return redirect()->back()->with('error','Password tidak sama');
        }

        if (User::where('email', '=', $request->email)->first() == false) {
            $request->merge([
                'role' => 'pengunjung',
                'password' => bcrypt($request->password),            
                'name' => $request->nama,
                
            ]);
            $i = User::create($request->except(['_token']))->id;

           

            Pengguna::create([

                'user_id'=> $i,
            ]);

            return redirect('login')->with('message', 'Berhasil Mendaftar');
            // return $i;
        } else {
            // return "eror";
            return redirect()->back()->with('error', 'Email sudah terdaftar');
        }
    }

}
