<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

class SubmitPlayerController extends Controller
{
    public function submitPlayer(Request $request)
    {
        try {
            
            //We get the player...
            $newPlayer = $request->json()->all();

            //Data API
            $apiResponse = Http::get('https://opensource.aoe.com/the-card-game-data/player.json');
            $apiResponse->throw();
            $apiData = $apiResponse->json();

            $exists = $this->playerExists($newPlayer, $apiData);

            if (!$exists) {
                return response()->json([
                    'success' => false,
                    'error' => 'The player you submitted do not exist'
                ], 400);
            }

            //It exists, we reach this point hence we answer :)

            return response()->json([
                'success' => true,
                'message' => 'New player '.$newPlayer['realName'].' submitted',
                'data' => [$newPlayer],
            ]);

        } catch (RequestException $e) {

            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);

        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);

        }
    }

    private function playerExists($newPlayer, $apiData)
    {

        /*We assure by comparing all the player ($newPlayer) data fields that the player
        exists in the array of objects */
        $matchingPlayer = collect($apiData)->first(function ($player) use ($newPlayer) {
            return $player['realName'] == $newPlayer['realName'] &&
                   $player['playerName'] == $newPlayer['playerName'] &&
                   $player['asset'] == $newPlayer['asset'];
        });

        return !is_null($matchingPlayer);

    }
}