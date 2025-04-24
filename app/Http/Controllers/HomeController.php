<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;     // Import Toy model
use App\Models\Child;   // Import Child model

class HomeController extends Controller
{
    public function index()
    {

        $toys = Toy::all();        // Get all toys
        $children = Child::all();  // Get all children

        // Pass data to the welcome view
        return view('welcome', [
            'toys' => $toys,
            'children' => $children
        ]);
    }
}