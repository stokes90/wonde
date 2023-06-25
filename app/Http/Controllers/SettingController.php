<?php

namespace App\Http\Controllers;

use App\Models\ApiSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    
    public function view(Request $request){
        $settings = ApiSetting::all();
        return view('settings')->with(compact('settings'))->with('success_message', 'data stored succesfully');
    }
    
    public function store(Request $request){
        
        $this->validate($request,[
            'base_uri'=>'required',
            'bearer_token'=>'required',
            'school_id' => 'required|max:12'
        ]);
        
        $baseUri = $request->base_uri;
        $bearerToken = $request->bearer_token;
        $schoolId = $request->school_id;
        
        $setting = ApiSetting::firstOrNew(['name' =>  'base_uri']);
        $setting->value = $baseUri;
        $setting->save();
        
        $setting = ApiSetting::firstOrNew(['name' =>  'bearer_token']);
        $setting->value = $bearerToken;
        $setting->save();
        
        $setting = ApiSetting::firstOrNew(['name' =>  'school_id']);
        $setting->value = $schoolId;
        $setting->save();

        return  $this->view($request);
    }
    
    public function  storeValidationRules(){
        
        
    }
    
}
