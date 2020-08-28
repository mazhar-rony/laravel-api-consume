<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getApiData()
    {
        $client = new Client();

        //$body['headers'] = array(''); if wanna include other info

        $request = $client->get('https://jsonplaceholder.typicode.com/posts');

        /* for post request
        $body['form_params'] = array('userId' => 1, 'id' => 101, 'title' => 'New Title', 'body' => 'New Body');
        $request = $client->post('https://jsonplaceholder.typicode.com/posts', $body);
        */

        $response = $request->getBody();
        
        //dd($response);
        //dd($response->getContents());
        //dd(json_decode($response));

        $profiles = json_decode($response);

        return view('profile.list', compact('profiles'));
    }
}
