<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index()
    {
        return  Title::all();
    }
    public function show(Request $request)
    {
        $data = Title::find($request['id']);
        return $data;
    }
    public function store(Request $request)
    {
        Title::create([
            'nama' => $request['nama'],
            'nim' => $request['nim'],
            'umur' => $request['umur']
        ]);
        return 'Data berhasil dibuat !';
    }
    // public function update(Request $request, Title $title)
    // {
    //     $title->nama = $request->nama;
    //     $title->nim = $request->nim;
    //     $title->umur = $request->umur;
    //     $title->save();
    //     return 'Data berhasil diubah !';
    // }
    // public function destroy(Title $title)
    // {
    //     $title->delete();
    //     return 'Data berhasil dihapus !';
    // }
}