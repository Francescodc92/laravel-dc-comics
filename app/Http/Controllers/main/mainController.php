<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class mainController extends Controller
{

    public function index()
    {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    public function show(string $id)
    {
        //
    }

}
