<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function sendPostRequest()
    {

        // $body = $response->getBody();

        // dd(response()->json(json_decode($body, true)));

        try {
            $client = new Client();
            $response = $client->request("POST", 'https://api.pexels.com/v1/search?orientation=landscape&query=carrotte&per_page=1', [
                'headers' => [
                    'authorization' => "KXazx6Fg1nf5Nq66F0Y0Qe6BFJ6o0oE0U6qoipIdsXcwqBpBsORGUgIr",
                ],
            ]);

            $body = $response->getBody();
            return response()->json(json_decode($body, true));
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
