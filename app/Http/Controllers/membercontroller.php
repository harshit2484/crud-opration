<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class membercontroller extends Controller
{
    //
    function adddata(Request $req)
    {
        $member= new member;    
        $member->firstname=$req->firstname;
        $member->lastname=$req->lastname;
        $member->age=$req->age;
        $member->email=$req->email;
        $member->password=$req->password;
        $member->save();
        return redirect('add1')->with('success','saved');
    }
    
   
}
