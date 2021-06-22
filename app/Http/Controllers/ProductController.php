<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Products::all();
        return view('pages.product.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'product_name' => 'required',
           'desc' => 'required',
           'kategori' => 'required',
           'price' => 'required',
           'quantity' => 'required'
       ]);

       if($request->hasFile('file')){
            $request -> validate([
                'images' => 'mimes:png,jpg',
            ]);

           $request->file->store('product', 'public');
           $product = new Products();
           $product->product_name = $request->product_name;
           $product->slug = Str::slug($request->product_name);
           $product->desc = $request->desc;
           $product->kategori = $request->kategori;
           $product->price = $request->price;
           $product->quantity = $request->quantity;
           $product->file_path = $request->file->hashName();
           $product->save();
       };


       return redirect()->route('product.index')->with('Succes tambah product');

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
        $item = Products::findOrFail($id);
        return view('pages.product.edit') -> with([
            'item' => $item
        ]);
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
        $request->validate([
            'product_name' => 'required',
            'desc' => 'required',
            'kategori' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        if($request->hasFile('file')){
             $request -> validate([
                 'images' => 'mimes:png,jpg',
             ]);
             $request->file->store('product', 'public');
             $data = new Products();
             $data->product_name = $request->product_name;
             $data->slug = Str::slug($request->product_name);
             $data->desc = $request->desc;
             $data->kategori = $request->kategori;
             $data->price = $request->price;
             $data->quantity = $request->quantity;
             $data->file_path = $request->file->hashName();
            $product = Products::findOrFail($id);
            Storage::delete('public/'.$product->file_path);
            $product->update($data);

        }


        return redirect()->route('product.index')->with('Succes update product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Products::findOrFail($id);
        $item->file_path->delete('product', 'public');
        Storage::delete('product/'.$item->file_path);
        $item->delete();
        return redirect()->route('product.index');
    }
}
