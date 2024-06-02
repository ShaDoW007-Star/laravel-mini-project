<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdata;

class registation extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sign(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'cpassword' => 'required|same:password'
            ]
        );

        // echo "<pre>";
        // print_r($request->all());

        $Userdata = new Userdata;
        $Userdata->name = $request->name;
        $Userdata->email = $request->email;
        $Userdata->gender = $request->gender;
        $Userdata->address = $request->address;
        $Userdata->password = bcrypt($request->password);
        $Userdata->save();

        return redirect("/aryan");
    }
    public function send()
    {
        $Userdata = Userdata::all();
        $data = compact("Userdata");

        return view("aryan")->with($data);
    }

    public function delete($id)
    {
        Userdata::find($id)->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $Userdata = Userdata::find($id);
        $Userdata->name = $request->name;
        $Userdata->email = $request->email;
        $Userdata->gender = $request->gender;
        $Userdata->address = $request->address;
        $Userdata->password = bcrypt($request->password);
        $Userdata->save();        
    }
}
