<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/api/notes');
        $body = $response->getBody();
        $data = json_decode($body);

        return view('notes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response = Http::get('http://127.0.0.1:8000/api/title');
        $body = $response->getBody();
        $data = json_decode($body);
        // dd($data);
        return view('notes.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request['title'];
        $anime = $request['anime'];
        $notes = $request['notes'];
        Http::post('http://127.0.0.1:8000/api/notes', [
            'title' => $title,
            'notes' => $notes,
            'titles_id' => $anime,
        ]);

        return redirect('notes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/notes/search', [
            'id' => $id
        ]);
        $body = $response->getBody();
        $data = json_decode($body);

        $date = Carbon::parse($data->created_at)->format('Y-m-d');
        // $dateAF = $dateBF
        return view('notes.show', compact('data', 'date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $response = Http::get('http://127.0.0.1:8000/api/notes/search', [
            'id' => $id
        ]);
        $body = $response->getBody();
        $data = json_decode($body);
        // dd($data);
        $response2 = Http::get('http://127.0.0.1:8000/api/title');
        $body2 = $response2->getBody();
        $data2 = json_decode($body2);
        return view('notes.edit', compact('data', 'data2'));
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
        Http::put('http://127.0.0.1:8000/api/notes/' . $id, [

            'title' => $request['title'],
            'titles_id' => $request['anime'],
            'notes' => $request['notes']
        ]);

        return redirect('notes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $r = Http::delete('http://127.0.0.1:8000/api/notes/' . $id . '/delete');

        return redirect('notes');
    }
}