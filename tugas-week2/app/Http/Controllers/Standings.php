<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Standings extends Controller
{
    // StandingsController.php
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://apiv3.apifootball.com/?action=get_standings&league_id=152&APIkey=67a40c68ae0fb8d5db56237fd22be3f9417ba164e3f8e80e50cf314e6f41108e');

        $statusCode = $response->getStatusCode();
        if ($statusCode == 200) {
            $standings = json_decode($response->getBody(), true);
            return view('homepage', compact('standings')); // Adjusted view name
        } else {
            // Handle errors
            return response()->json(['error' => 'Failed to fetch data'], $statusCode);
        }
    }

}
