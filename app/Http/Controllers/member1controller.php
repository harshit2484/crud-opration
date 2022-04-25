<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class member1controller extends Controller
{
    //
   
    function list()
    {
        $data=member::all();
        return view('list',['members'=>$data]);

    }
    function delete($id)
    {
        $data=member::find($id);
        $data->delete();
        return redirect('history')->with('success','deleted');
        
    }
    function showData($id)
    { 
        $data= Member::find($id);
        return view('update',['data'=>$data]);
    }
   function update(Request $req)
   {
       $data=member::find($req->id);
       $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->age=$req->age;
        $data->email=$req->email;
        $data->password=$req->password;
        $data->save();
        return redirect('history')->with('success','updated');
   }


}
