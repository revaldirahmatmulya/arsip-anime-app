<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesController extends Controller
{

    public function index()
    {
        return Notes::all();
    }

    public function store(Request $request)
    {
        Notes::create([
            'title' => $request['title'],
            'notes' => $request['notes'],
            'titles_id' => $request['titles_id']
        ]);
        return 'Data berhasil ditambah';
    }


    public function show(Request $request)
    {
        $data = Notes::find($request['id']);
        return $data;
    }

    public function update(Request $request, $id)
    {
        $notes = Notes::find($id);

        $notes->update($request->all());
        return 'Data berhasil diubah';
    }


    public function destroy(notes $notes, $id)
    {
        Notes::destroy($id);
        return 'Data berhasil dihapus';
    }
}