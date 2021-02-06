<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalidController extends Controller
{
    public function index()
    {
        return view('walid');
    }

    public function show($id)
    {
        return 'my name is:' . $id;
    }

    public function sum($id)
    {
        return 3 + $id;
    }
}
