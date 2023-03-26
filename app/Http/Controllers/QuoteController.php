<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    //

    public function index()
    {
        $post = Quote::latest()->pagination(5);
        return view('searchbar', compact('post'));
    }

    public function store()
    {
        
    }
}
