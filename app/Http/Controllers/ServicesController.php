<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = services::all();
        $services_count = services::count();
        return view('admin.services.index')->with('services', $services)->with('count', $services_count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.services.new');
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
            'title' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $services = new services;
        $services->title = $request->title;
        $services->content = $request->description;
        $services->sub = $request->sub;
        if ($request->status != null) {
            $services->status = 1;
        } else {
            $services->status = 0;
        }
        if ($request->exclusive != null) {
            $services->exclusive = 1;
        } else {
            $services->exclusive = 0;
        }

        $imageName = time() . '.' . $request->images->extension();

        $request->images->move(public_path('services_images'), $imageName);

        $services->img = '/services_images/' . $imageName;
        $services->link = $request->link;

        $services->save();
        Session::flash('message', 'This service was created');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('services'));
    }

    /**
     * Display the specified resource.
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

            $request->file('upload')->move(public_path('services_images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/services_images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = services::find($id);

        return view('admin.services.show')->with('id', $services);
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

        $services = services::find($id);
        $services->title = $request->title;
        if ($request->status != null) {
            $services->status = 1;
        } else {
            $services->status = 0;
        }
        if ($request->exclusive != null) {
            $services->exclusive = 1;
        } else {
            $services->exclusive = 0;
        }

        if ($request->images != null) {
            $imageName = time() . '.' . $request->images->extension();

            $request->images->move(public_path('services_images'), $imageName);

            $services->img = '/services_images/' . $imageName;
        }
        $services->link = $request->link;
        $services->sub = $request->sub;

        $services->update();
        Session::flash('message', 'This service was update');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('services'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = services::find($id);
        $services->delete();
        Session::flash('message', 'This service was deleted');
        Session::flash('alert-class', 'alert-danger');
        return back();
    }
}
