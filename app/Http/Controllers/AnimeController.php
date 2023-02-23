<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://127.0.0.1:8000',
            // You can set any number of default request options.
            'timeout'  => 2000,
        ]);
        $response = $client->request('GET', '/api/title');
        $body = $response->getBody();
        $data = json_decode($body);
        return view('layouts.home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $title)
    {

        $search = Str::headline($title);

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://127.0.0.1:8000',
            // You can set any number of default request options.
            'timeout'  => 2000,
        ]);
        $response = $client->request('GET', '/api/title/search/?id=' . $id);
        $body = $response->getBody();
        $data = json_decode($body);
        $video_data = json_decode($body, true);
        // dd($data['title']);

        // $title = isset($video_data['title']);

        $apikey = "AIzaSyD2cTxPXuFEOAbdC8BicdGRhpzo0Mb44Lg";
        $client2 = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://www.googleapis.com',
            // You can set any number of default request options.
            'timeout'  => 2000,
        ]);
        $response2 = $client2->request('GET', '/youtube/v3/search?key=' . $apikey . '&type=video&part=snippet&q=' . $search . ' pv' . '&maxresult=1');
        $body2 = $response2->getBody();
        $video = json_decode($body2);


        return view('layouts.detail', compact('data', 'video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}