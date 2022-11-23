<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa2;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data = mahasiswa2::all();
        return view('read', compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function insert(Request $request){
        mahasiswa2::create($request->all());
        return redirect()->route('read')->with('success','Data Berhasil Ditambahkan!');
    }

    public function edit($nim){
        $data = mahasiswa2::find($nim); 
        return view('edit', compact('data'));
    }

    public function update(Request $request, $nim) {
        $data = mahasiswa2::find($nim);
        $data->update($request->all());
        return redirect()->route('read')->with('success','Data Berhasil Diperbarui!');
    }

    public function delete($nim){
        $data = mahasiswa2::find($nim);
        $data->delete();
        return redirect()->route('read')->with('success','Data Berhasil Dihapus!');
    }
}
