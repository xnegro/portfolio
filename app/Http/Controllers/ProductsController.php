<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projects;
use App\Models\services;
use App\Models\images;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = projects::all();
        $products_count = projects::count();
        $services = services::all();
        return view('admin.products.index')->with('count', $products_count)->with('products', $products)->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = services::all();
        return view('admin.products.new')->with('services', $services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required',
            'service_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'cover' => 'required',
        ]);
        $products = new projects;
        $products->title = $request->title;
        $products->service_id = $request->service_id;
        $products->price = $request->price;
        $products->description = $request->description;
        $imageName = time() . '.' . $request->cover->extension();

        $request->cover->move(public_path('products_images'), $imageName);

        $products->cover = '/products_images/' . $imageName;

        if ($request->status != null) {
            $products->status = 1;
        } else {
            $products->status = 0;
        }
        if ($request->exclusive != null) {
            $products->exclusive = 1;
        } else {
            $products->exclusive = 0;
        }

        $products->save();


        return redirect(route('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services = services::all();

        $products = projects::find($id);
        return view('admin.products.edit')->with('id', $products)->with('services', $services);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function image_upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('product_images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/product_images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
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
        $data = $request->validate([
            'title' => 'required',
            'service_id' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $products = projects::find($id);
        $products->title = $request->title;
        $products->service_id = $request->service_id;
        $products->price = $request->price;
        $products->description = $request->description;
        if ($request->status != null) {
            $products->status = 1;
        } else {
            $products->status = 0;
        }
        if ($request->exclusive != null) {
            $products->exclusive = 1;
        } else {
            $products->exclusive = 0;
        }


        if ($request->has('cover')) {

            $imageName = time() . '.' . $request->cover->extension();

            $request->cover->move(public_path('products_images'), $imageName);

            $products->cover = '/products_images/' . $imageName;
        }
        $products->update();
        Session::flash('message', 'This product was updated');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = projects::find($id);
        $products->delete();
        Session::flash('message', 'This product was deleted');
        Session::flash('alert-class', 'alert-danger');
        return back();
    }
}
