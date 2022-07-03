<?php

namespace App\Http\Controllers;

use App\Models\spec;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    function index()
    {
        $specs = spec::all();
        return view("welcome",[
            "specs" => $specs
        ]) ;
    }

    function addUser(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required|max:256',
            'lastname'=>'required|max:256',
            'email'=>'required|max:256|email',

        ]);

        $specs = new spec();
        $specs->firstname = $request["firstname"];
        $specs->lastname = $request["lastname"];
        $specs->mobile = $request["mobile"];
        $specs->email = $request["email"];
        $specs->birthday = $request["birthday"];
        $specs->save();

        return redirect()->to('/');


    }

    function del()
    {

        spec::truncate();

        return redirect()->to('/');

    }
}
