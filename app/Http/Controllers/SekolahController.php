<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    public function index()

    {
        return view('sekolahs.index', [
            'sekolahs' => sekolah::get(),
        ]);
    }

    public function tambah()

    {
        return view('sekolahs.tambah');
    }

    public function store(Request $request)
    {
        $sekolahs = new sekolah();

        $sekolahs->namasekolah = $request->namasekolah;
        $sekolahs->alamat = $request->alamat;
        $sekolahs->jurusan = $request->jurusan;
        $sekolahs->jumlahguru = $request->jumlahguru;

        $sekolahs->save();

        return redirect()->route('sekolahs.index');
    }

    public function edit($id)
    {
        $sekolahs = sekolah::find($id);

        return view('sekolahs.edit', [
            'sekolahs' => $sekolahs,
        ]);
    }

    public function update(Request $request, $id)
    
    {
        $sekolahs = sekolah::find($id);
$sekolahs->nama_sekolah = $request->nama_sekolah;
$sekolahs->alamat = $request->alamat;
$sekolahs->jurusan = $request->jurusan;
$sekolahs->jumlah_guru = $request->jumlah_guru;

$sekolahs->save();

session()->flash('info','Data berhasil diperbarui.');

return redirect()->route ('sekolahs.index');
    }

    public function hapus($id)
    {
        $sekolahs = sekolah::find($id);
       
        $sekolahs->delete();
        
        return redirect()->route('sekolahs.index');
    }

}




