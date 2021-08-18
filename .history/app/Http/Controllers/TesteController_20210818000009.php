<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->put('Laravel', 'The PHP Framework For Web Artisans');
        dd($request->session()->get('Laravel'));
    }
}
