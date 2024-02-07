<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use App\Models\Card; // Import the Card model
use Illuminate\Support\Facades\Validator; // Import the Validator class

class CardsController extends Controller
{
    public function fetchCards(Request $request)
    {
        try {
            // We obtain the sort criteria
            $sort = $request->query('sort', 'default');

            // Fetch data from the external API
            $apiData = Http::get('https://dinosaur-facts-api.shultzlab.com/dinosaurs');
            $apiData->throw(); 
            $cards = $apiData->json();

            // We check the API data is not empty
            if (empty($cards)) {
                return response()->json(['error' => 'No data from API'], 500);
            }

            // Validate and process the data
            $validatedCards = [];
            foreach ($cards as $cardData) {
                $validator = Validator::make($cardData, Card::$rules);
                if ($validator->fails()) {
                    continue;
                }
                $validatedCards[] = $cardData;
            }

            shuffle($validatedCards);
            // First 10
            $randomCards = array_slice($validatedCards, 0, min(16, count($validatedCards)));

            // Apply sorting based on the 'sort' query parameter
            if ($sort === 'asc') {
                usort($randomCards, function($a, $b) {
                    return strcmp($a['Name'], $b['Name']);
                });
            } elseif ($sort === 'desc') {
                usort($randomCards, function($a, $b) {
                    return strcmp($b['Name'], $a['Name']);
                });
            }

            return response()->json([
                'success' => true,
                'message' => 'Data successfully fetched.',
                'data' => $randomCards,
            ]);

        } catch (RequestException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        } catch (\Exception $e) {
            // Catch any other exceptions, e.g., when randomCards is called on an empty array
            return response()->json(['error' => 'An unexpected error occurred'], 500);
        }
    }
}
