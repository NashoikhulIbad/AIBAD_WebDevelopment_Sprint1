<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    public function postQuote(Request $request)
    {
        $quote = new Quote();
        // $quote->content = $request->query->all();
        $quote->content = $request->input('quote_name');
        $quote->save();
        return response()->json(['quote' => $quote], 201);
    }

    public function getQuotes()
    {
        $quotes = Quote::all();
        $response = ['quotes' => $quotes];
        return response()->json([$response, 200]);
    }

    public function putQuote(Request $request, $id)
    {
        $quote = Quote::find($id);

        if (!$quote)
        {
            return response()->json(['message' => 'Quote not found', 404]);
        }

        $quote->content = $request->input('quote_name');
        $quote->save();

        return response()->json(['quote' => $quote], 200);
    }

    public function deleteQuote($id)
    {
        $quote = Quote::find($id);
        $quote->delete();
        return response()->json(['message' => 'Quote deleted successfully'], 200);
    }

    
}
