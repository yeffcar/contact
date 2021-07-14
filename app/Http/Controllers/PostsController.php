<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class PostsController extends Controller
{
    //
    public function index()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://jsonplaceholder.typicode.com/posts',
            'timeout'  => 2.0,
        ]);
    
        $response = $client->request('GET', 'posts');
    
        $posts= json_decode($response->getBody()->getContents());
    
        return view('posts.index', compact('posts'));
    }
}
