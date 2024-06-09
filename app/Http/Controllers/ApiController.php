<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiController extends Controller
{
    public function sendPostRequest()
    {

        // $client = new Client();
        // $response = $client->request("POST", 'https://api.pexels.com/v1/search?orientation=landscape&query=carrotte&per_page=1', [
        //     'headers' => [
        //         'authorization' => "KXazx6Fg1nf5Nq66F0Y0Qe6BFJ6o0oE0U6qoipIdsXcwqBpBsORGUgIr",
        //     ],
        // ]);

        $client = new Client();
        $url = 'https://api.pexels.com/v1/search?orientation=landscape&query=toilette&per_page=1';
        $data = [
            'headers' => [
                'Authorization' => 'KXazx6Fg1nf5Nq66F0Y0Qe6BFJ6o0oE0U6qoipIdsXcwqBpBsORGUgIr'
            ]
        ];

        try {
            $response = $client->post($url, $data);
            $body = $response->getBody()->getContents();
            return response()->json(['message' => 'Réponse du serveur', 'data' => $body]);
        } catch (RequestException $e) {
            $errorMessage = $e->getMessage();
            if ($e->hasResponse()) {
                $errorMessage = $e->getResponse()->getBody()->getContents();
            }
            return response()->json(['error' => 'Erreur lors de la requête', 'message' => $errorMessage], 500);
        }
    }
}
