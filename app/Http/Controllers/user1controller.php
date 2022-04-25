<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\tbluser;
use Illuminate\Http\Request;
use App\Models\user1;

class user1controller extends Controller
{
    //
    function data()
    {
        return member::all();
    }
}
