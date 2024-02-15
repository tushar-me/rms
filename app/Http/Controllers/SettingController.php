<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.setting');
    }
    public function store(Request $request, $id)
    {
        $setting = Setting::where('id', $id)->first();
        if($request->file('logo')){
            $image = time(). ".".$request->file('logo')->extension();
            $request->file('logo')->move(public_path('uploads'), $image);
            $setting->logo = $image;
        }
        $setting->header_text      = $request->header_text;
        $setting->about            = $request->about;
        $setting->phone            = $request->phone;
        $setting->phone_secondary  = $request->phone_secondary;
        $setting->whatsapp         = $request->whatsapp;
        $setting->email            = $request->email;
        $setting->email_secondary  = $request->email_secondary;
        $setting->facebook_link    = $request->facebook_link;
        $setting->country          = $request->country;
        $setting->city             = $request->city;
        $setting->location         = $request->location;
        $setting->location_link    = $request->location_link;
        $setting->update();
        return redirect()->back();
    }
    public function update()
    {

    }
}
