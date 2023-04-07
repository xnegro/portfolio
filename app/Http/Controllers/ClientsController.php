<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = clients::all();
        return view('clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = new clients;
        $partner->title = $request->title;
        $partner->link = $request->link;
        $imageName = time() . '.' . $request->logo->extension();

        $request->logo->move(public_path('partners_images'), $imageName);

        $partner->img = '/partners_images/' . $imageName;
        $partner->save();
        Session::flash('message', 'This partenr  was added');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('clients'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(clients $clients, $id)
    {

        $partner = clients::find($id);
        $partner->delete();

        Session::flash('message', 'This client  was deleted');
        Session::flash('alert-class', 'alert-danger');
        return back();
    }
}
