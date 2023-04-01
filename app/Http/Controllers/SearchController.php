<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function index(Request $request)
    {

        // if ($request) {
        //     $data = Quote::where('quote_name', 'like', '%' . $request->cari . '%');
        // } else {
        //     $data = Quote::all();
        // }
        // dd($data);
        return view('welcome');
    }
}
