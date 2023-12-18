<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;


class CardsController extends Controller
{
    public function fetchCards(Request $request)
    {

        try {
            //We obtain the sort criteria
            $sort = $request->query('sort', 'default');

            //Fetch from API
            $apiData = Http::get('https://opensource.aoe.com/the-card-game-data/player.json');
            $apiData->throw(); 
            $cards = $apiData->json();

            //We check the API data is not empty
            if (empty($cards)) {
                return response()->json(['error' => 'No data from API'], 500);
            }

            //Process and order the array of objects
            if ($sort === 'asc') {
                $sortedCards = collect($cards)->sortBy('realName')->values();
            } elseif ($sort === 'desc') {
                $sortedCards = collect($cards)->sortByDesc('realName')->values();
            } else {
                
                $sortedCards = $cards;
            }

            return response()->json(['data' => $sortedCards]);

        } catch (RequestException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
