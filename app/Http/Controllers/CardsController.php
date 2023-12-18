<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CardsController extends Controller
{
    public function fetchCards(Request $request)
    {
        

        return response()->json(['message' => 'Hello world, here we will fetch cards']);
    }

}
