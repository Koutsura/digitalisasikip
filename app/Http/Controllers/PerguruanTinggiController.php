<?php

namespace App\Http\Controllers;

use App\Models\perguruan_tinggi;
use Illuminate\Http\Request;

class PerguruanTinggiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        if ($search) {
            $data['perguruan_tinggi'] = perguruan_tinggi::where('kode_pt', 'like', "%{$search}%")->get();
        } else {
            $data['perguruan_tinggi'] = perguruan_tinggi::all();
        }
        return view('layouts.digitalisasi.perguruan_tinggi.index', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.digitalisasi.perguruan_tinggi.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $request->validate([
        'kode_prodi' => 'required|string|max:100',
        'nama_prodi' => 'required|string|max:100',
        'kode_pt' => 'required|string|max:100',
        'nama_pt' => 'required|string|max:100',
         ]); */

        $perguruan_tinggi = new perguruan_tinggi();
        $perguruan_tinggi->kode_pt = $request->kode_pt;
        $perguruan_tinggi->nama_pt = $request->nama_pt;

        /* if ($request->hasFile('image_akreditasi')) {
            $imageName = $request->prodi . '_image_akreditasi_' . date('YmdHis') . '.' . $request->file('image_akreditasi')->extension();
            $request->file('image_akreditasi')->move(public_path('images/akreditasi/'), $imageName);
            $akreditasi->image_akreditasi = $imageName;
        } */

        if ($perguruan_tinggi->save()) {
            return redirect()->route('perguruan_tinggi.index')->with('message', 'Data perguruan tinggi Berhasil Disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menyimpan Data perguruan tinggi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(perguruan_tinggi $perguruan_tinggi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $perguruan_tinggi= perguruan_tinggi::find($id);

        return view('layouts.digitalisasi.perguruan_tinggi.edit', compact('perguruan_tinggi'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        /* $request->validate([
        'kode_prodi' => 'required|string|max:100',
        'nama_prodi' => 'required|string|max:100',
        'kode_pt' => 'required|string|max:100',
        'nama_pt' => 'required|string|max:100',
        ]); */

        $perguruan_tinggi = perguruan_tinggi::find($id);
        if (!$perguruan_tinggi) {
            return redirect()->back()->with('error', 'Data perguruan tinggi tidak ditemukan');
        }
        $perguruan_tinggi->kode_pt = $request->kode_pt;
        $perguruan_tinggi->nama_pt = $request->nama_pt;

       /*  if ($request->hasFile('image_akreditasi')) {
            // Hapus gambar sebelumnya jika diganti
            if ($akreditasi->image_akreditasi) {
                $existingImagePath = public_path('images/akreditasi/' . $akreditasi->image_akreditasi);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }

            $imageName = str_replace(' ', '', $request->prodi) . '_image_akreditasi_'. date('YmdHis') . '.' . $request->file('image_akreditasi')->extension();
            $request->file('image_akreditasi')->move(public_path('images/akreditasi'), $imageName);
            $akreditasi->image_akreditasi = $imageName;
        } */

        if ($perguruan_tinggi->save()) {
            return redirect()->route('perguruan_tinggi.index')->with('message', 'Data Perguruan Tinggi Berhasil Diedit.');
        } else {
            return redirect()->back()->with('error', 'Gagal Edit Data perguruan tinggi.');
        }
        return redirect()->route('perguruan_tinggi.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $perguruan_tinggi = perguruan_tinggi::find($id);
        if (!$perguruan_tinggi) {
            return redirect()->back()->with('error', 'Data perguruan tinggi tidak ditemukan');
        }
        /* if ($akreditasi->image_akreditasi) {
            $existingImagePath = public_path('images/akreditasi/' . $akreditasi->image_akreditasi);
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        } */
        if ($perguruan_tinggi->delete()) {
            return redirect()->route('perguruan_tinggi.index')->with('message', 'Data perguruan tinggi Berhasil Dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus Data perguruan tinggi.');
        }
        return redirect()->route('perguruan_tinggi.index');
        //
    }
}
