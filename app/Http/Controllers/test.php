<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function __invoke()
    {
        return view('ExampleComponent');
    }
}
