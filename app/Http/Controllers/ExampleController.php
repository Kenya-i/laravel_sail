<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;

class ExampleController extends Controller
{
    public function index()
    {
        return view("welcome");
    }

    public function example()
    {
        $examples = Example::all();
        return view('example', compact('examples'));
    }
}
