<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use GuzzleHttp\client;
class ApiController extends Controller
{
    
 public function index () {
     
    $client = new client([
        'base_url' => 'https://api.genderize.io/?name=pablo'
    ]);

    $response = $client->request('GET', 'posts');

    $posts = json_decode($response->getBody()->getContents());
    foreach($posts['results'] as $post){
        $posts = [
            'nombre' -> $post['name']
        ];
    }

    


    return view('welcome', compact('post'));

 }



};*\
