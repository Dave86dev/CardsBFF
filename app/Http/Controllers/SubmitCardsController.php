<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitCardsController extends Controller
{
    public function submitPlayer(Request $request)
    {
        

        return response()->json(['message' => 'Hello world, here we will submit the player']);
    }
}
