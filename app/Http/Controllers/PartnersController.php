<?php

namespace App\Http\Controllers;

use App\Models\partners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = partners::all();
        return view('partners.index')->with('partners', $partner);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = new partners;
        $partner->title = $request->title;
        $partner->link = $request->link;
        $imageName = time() . '.' . $request->logo->extension();

        $request->logo->move(public_path('partners_images'), $imageName);

        $partner->img = '/partners_images/' . $imageName;
        $partner->save();
        Session::flash('message', 'This partenr  was added');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('partners'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function show(partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function edit(partners $partners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, partners $partners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partners  $partners
     * @return \Illuminate\Http\Response
     */
    public function destroy(partners $partners, $id)
    {
        $partner = partners::find($id);
        $partner->delete();

        Session::flash('message', 'This partenr  was deleted');
        Session::flash('alert-class', 'alert-danger');
        return back();
    }
}
