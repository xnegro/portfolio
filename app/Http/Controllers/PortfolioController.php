<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $port = portfolio::all();
        $count = portfolio::count();
        return view('admin.portfolio.index')->with('ports', $port)->with('count', $count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.portfolio.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $port = new portfolio;
        $port->title = $request->title;
        $port->sub_title = $request->sub_title;
        $port->link = $request->link;

        if ($request->has('cover')) {

            $imageName = time() . '.' . $request->cover->extension();

            $request->cover->move(public_path('portfolio_images'), $imageName);

            $port->cover = '/portfolio_images/' . $imageName;
        }


        if ($request->status != null) {
            $port->status = 1;
        } else {
            $port->status = 0;
        }



        $port->save();
        Session::flash('message', 'This portfolio was added');
        Session::flash('alert-class', 'alert-success');
        return redirect(route('portfolios'));
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
        $id = portfolio::find($id);
        return view('admin.portfolio.edit')->with('id', $id);
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
        $port = portfolio::find($id);
        $port->title = $request->title;
        $port->sub_title = $request->sub_title;
        $port->link = $request->link;

        if ($request->has('cover')) {

            $imageName = time() . '.' . $request->cover->extension();

            $request->cover->move(public_path('portfolio_images'), $imageName);

            $port->cover = '/portfolio_images/' . $imageName;
        }


        if ($request->status != null) {
            $port->status = 1;
        } else {
            $port->status = 0;
        }



        $port->update();
        Session::flash('message', 'This portfolio was updated');
        Session::flash('alert-class', 'alert-success');
        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $port = portfolio::find($id);
        $port->delete();

        Session::flash('message', 'This portfolio was deleted');
        Session::flash('alert-class', 'alert-danger');
        return back();
    }
}
