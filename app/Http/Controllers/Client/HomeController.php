<?php

namespace App\Http\Controllers\Client;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'listProduct' => $this->listProduct()
        ];

        return view('client.pages.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        // Define validation rules
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'message' => 'required',
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

            $createUser = Contact::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'message' => $data['message'],
            ]);
            DB::commit();

            return redirect()->intended('/')->with('success', 'Contact post successfully!')->with('timeout', 3000);

        } catch (\Throwable $e) {
            DB::rollback();         

            dd($e);
            return redirect()->intended('/');
        }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}