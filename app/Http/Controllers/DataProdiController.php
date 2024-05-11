<?php

namespace App\Http\Controllers;

use App\Models\data_prodi;
use Illuminate\Http\Request;

class DataProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        if ($search) {
            $data['data_prodi'] = data_prodi::where('nama_prodi', 'like', "%{$search}%")->get();
        } else {
            $data['data_prodi'] = data_prodi::all();
        }
        return view('layouts.digitalisasi.data_prodi.index', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.digitalisasi.data_prodi.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'kode_prodi' => 'required|string|max:100',
        'nama_prodi' => 'required|string|max:100',
        'kode_pt' => 'required|string|max:100',
        'nama_pt' => 'required|string|max:100',
         ]);

        $data_prodi = new data_prodi();
        $data_prodi->kode_prodi = $request->kode_prodi;
        $data_prodi->nama_prodi = $request->nama_prodi;
        $data_prodi->kode_pt = $request->kode_pt;
        $data_prodi->nama_pt = $request->nama_pt;

        /* if ($request->hasFile('image_akreditasi')) {
            $imageName = $request->prodi . '_image_akreditasi_' . date('YmdHis') . '.' . $request->file('image_akreditasi')->extension();
            $request->file('image_akreditasi')->move(public_path('images/akreditasi/'), $imageName);
            $akreditasi->image_akreditasi = $imageName;
        } */

        if ($data_prodi->save()) {
            return redirect()->route('data_prodi.index')->with('message', 'Data Prodi Berhasil Disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menyimpan Data Prodi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(data_prodi $data_prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_prodi= data_prodi::find($id);

        return view('layouts.digitalisasi.data_prodi.edit', compact('data_prodi'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'kode_prodi' => 'required|string|max:100',
        'nama_prodi' => 'required|string|max:100',
        'kode_pt' => 'required|string|max:100',
        'nama_pt' => 'required|string|max:100',
        ]);

        $data_prodi = data_prodi::find($id);
        if (!$data_prodi) {
            return redirect()->back()->with('error', 'Data Prodi tidak ditemukan');
        }
        $data_prodi = new data_prodi();
        $data_prodi->kode_prodi = $request->kode_prodi;
        $data_prodi->nama_prodi = $request->nama_prodi;
        $data_prodi->kode_pt = $request->kode_pt;
        $data_prodi->nama_pt = $request->nama_pt;

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

        if ($data_prodi->save()) {
            return redirect()->route('data_prodi.index')->with('message', 'Data Prodi Berhasil Diedit.');
        } else {
            return redirect()->back()->with('error', 'Gagal Edit Data Prodi.');
        }
        return redirect()->route('data_prodi.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data_prodi = data_prodi::find($id);
        if (!$data_prodi) {
            return redirect()->back()->with('error', 'Data Prodi tidak ditemukan');
        }
        /* if ($akreditasi->image_akreditasi) {
            $existingImagePath = public_path('images/akreditasi/' . $akreditasi->image_akreditasi);
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        } */
        if ($data_prodi->delete()) {
            return redirect()->route('data_prodi.index')->with('message', 'Data Prodi Berhasil Disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menyimpan Data Prodi.');
        }
        return redirect()->route('data_prodi.index');
        //
    }
}
