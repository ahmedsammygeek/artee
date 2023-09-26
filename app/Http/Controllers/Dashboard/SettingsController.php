<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
class SettingsController extends Controller
{
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $info = Settings::first();
        return view('dashboard.settings.edit', compact('info') );
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
        $info = Settings::first();
        $info->setTranslation('about_us' , 'ar' , $request->about_us_ar );
        $info->setTranslation('about_us' , 'en' , $request->about_us_en );
        $info->email = $request->email;
        $info->phone = $request->phone;
        $info->facebook = $request->facebook;
        $info->twitter = $request->twitter;
        $info->instgrame = $request->instgrame;
        $info->lat = $request->latitude;
        $info->long = $request->longitude;
        $info->android_link = $request->android_link;
        $info->ios_link = $request->ios_link;
        if ($request->hasFile('logo')) {
            $info->logo =  basename($request->file('logo')->store('settings'));
        }
        $info->save();
        return redirect()->back()->with('success' ,  'تم التعديل بنجاح' );
    }

    
}
