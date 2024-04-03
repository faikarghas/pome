<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use App\Models\Cmstoken;

class AuthPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        if (Auth::check()) {
            return redirect()->intended('/');
        }

        $data = [
         
        ];

        return view('admin.pages.auth.register',$data);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login($token)
    {
        $token = Cmstoken::where(['token'=> $token,'active'=>1])->first();
        if ($token == null) {
            return redirect()->intended('/');
        }
        if (Auth::check()) {
            return redirect()->intended('/admin/dashboard');
        }

        $data = [
         
        ];

        return view('admin.pages.auth.login',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function actionRegister(Request $request)
    {
        // Define validation rules
        $rules = [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
        ];

        // Perform validation
        $validator = Validator::make($request->all(), $rules);

        // Handle validation failure
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator) // Pass validation errors to the frontend
                ->withInput(); // Preserve user input in form fields
        }

         DB::beginTransaction();

        try {
            $data = $request->all();

            $createUser = User::create([
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            DB::commit();

            return redirect()->intended('/admin/register')->with('success', 'User created successfully!')->with('timeout', 3000);

        } catch (\Throwable $e) {
            DB::rollback();         

            dd($e);
            return redirect()->intended('/');
        }

    }

    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/admin/dashboard');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect()->back();
        }
    }

    public function createToken(Request $request)
    {
        DB::beginTransaction();

        try {
            $bytes = random_bytes(32); // Generate random bytes
            $encoded = base64_encode($bytes);
            $createUser = Cmstoken::create([
                'token' => rtrim(str_replace('/', '', $encoded), '='),
                'active' => 1,
            ]);
            DB::commit();

            return redirect()->intended('/');

        } catch (\Throwable $e) {
            DB::rollback();         

            dd($e);
            return redirect()->intended('/');
        }
    }


}