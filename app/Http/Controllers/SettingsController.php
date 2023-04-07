<?php

namespace App\Http\Controllers;

use App\Models\settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sett = settings::all();
        return view('admin.settings.index')->with('setts', $sett);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $sett = settings::find(1);
        $sett->title = $request->title;
        $sett->email = $request->email;
        $sett->phone = $request->phone;
        $sett->map = $request->map;
        $sett->home_ftext = $request->home_ftext;
        $sett->home_stext = $request->home_stext;
        $sett->about_ftext = $request->about_ftext;
        $sett->about_stext = $request->about_stext;
        $sett->about_content = $request->about_content;
        if ($request->about_img != null) {
            $imageName = time() . '.' . $request->about_img->extension();

            $request->about_img->move(public_path('main'), $imageName);

            $sett->about_img = '/main/' . $imageName;
        }
        if ($request->logo != null) {
            $imageName = time() . '.' . $request->logo->extension();

            $request->logo->move(public_path('main'), $imageName);

            $sett->logo = '/main/' . $imageName;
        }
        $sett->update();
        Session::flash('message', 'Settings was updated');
        Session::flash('alert-class', 'alert-success');

        return back();
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_info(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $users = User::find(1);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;
        if ($request->password != null) {
            $users->password = Hash::make($request->password);
        }

        if ($request->photo != null) {

            $imageName = time() . '.' . $request->photo->extension();

            $request->photo->move(public_path('main'), $imageName);

            $users->profile_photo_path = '/main/' . $imageName;
        }


        $users->update();
        Session::flash('message', 'Settings was updated');
        Session::flash('alert-class', 'alert-success');

        return back();
    }
}
