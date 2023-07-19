<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('example');
    }
    
    public function index()
    {
        return response()->json([
            'message' => 'Hello World!',
        ]);
    }

    
    public function noAccess()
    {
        return response()->json([
            'message' => 'No Hello!',
        ]);
    }

}
