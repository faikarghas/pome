<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $data = [
            'product' => $product
        ];

        return view('admin.pages.product.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'title'                 =>  'required|string|max:100',
                'slug'                  =>  'required|string',
                'content'               =>  'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();
        try {
            $post = Product::create([
                'title'         =>  $request->title,
                'slug'          =>  $request->slug,
                'content'       => $request->content,
                'city'          => $request->city,
                'image'          => $request->image,
            ]);
            DB::commit();

            Alert::success('Tambah Product', 'Berhasil');
            return redirect()->route('product.index');

        } catch (\throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
            // Alert::error('Tambah Product', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', '=', $id)->first();

        return view('admin.pages.product.edit', compact('product'));
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
        $validator = Validator::make(
            $request->all(),
            [
                'title'                 =>  'required|string|max:100',
                'slug'                  =>  'required|string',
            ]
        );


        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        DB::beginTransaction();
        try {
            $post = Product::whereId($id);
            $post->update([
                'title'         =>  $request->title,
                'slug'          =>  $request->slug,
                'content'       => $request->content,
                'city'          => $request->city,
                'image'          => $request->image,
            ]);

            DB::commit();

            Alert::success('Edit Product', 'Berhasil');
            return redirect()->back();
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Product', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', '=', $id)->delete();

        Alert::success('Hapus Product', 'Berhasil');
        return redirect()->route('product.index');
    }
}
