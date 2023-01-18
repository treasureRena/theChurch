<?php

namespace App\Http\Controllers;

//use App\Libraries\Messenger;
use App\Models\Contact;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function uploadRequest(Request $request){
        request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'msg' => 'required',
        ]);
//        dd("hdhjh");
//        dd($dddd);
        $save = new Contact();
        $save->name             = $request->name;
        $save->msg             = $request->msg;
        if (!empty($request->email)){
            $save->email             = $request->email;
        }
        $save->phone             = $request->phone;

        $save->save();
        return back()
            ->with('success','Thanks for contacting us, We will get back to you shortly .');
    }
}
