<?php

namespace App\Http\Controllers;

use App\Models\data_mhs;
use Illuminate\Http\Request;

class DataMhsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        if ($search) {
            $data['data_mhs'] = data_mhs::where('nama_mhs', 'like', "%{$search}%")->get();
        }
        if ($search) {
            $data['data_mhs'] = data_mhs::where('tempatlahir_mhs', 'like', "%{$search}%")->get();
        }
        else {
            $data['data_mhs'] = data_mhs::all();
        }
        return view('layouts.digitalisasi.data_mhs.index', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.digitalisasi.data_mhs.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $request->validate([
        'nim_mhs' => 'required|string|max:100',
        'nama_mhs' => 'required|string|max:100',
        'tempatlahir_mhs' => 'required|string|max:100',
        'tanggallahir_mhs' => 'required|date',
        'jumlah_semaktif' => 'required|string|max:10000',
        'jumlah_semcuti' => 'required|string|max:10000',
        'kode_prodi' => 'required|string|max:100',
        'nama_prodi' => 'required|string|max:100',
         ]); */

        $data_mhs = new data_mhs();
        $data_mhs->nim_mhs = $request->nim_mhs;
        $data_mhs->nama_mhs = $request->nama_mhs;
        $data_mhs->tempatlahir_mhs = $request->tempatlahir_mhs;
        $data_mhs->tanggallahir_mhs = $request->tanggallahir_mhs;
        $data_mhs->jumlah_semaktif = $request->jumlah_semaktif;
        $data_mhs->jumlah_semcuti = $request->jumlah_semcuti;
        $data_mhs->kode_prodi = $request->kode_prodi;
        $data_mhs->nama_prodi = $request->nama_prodi;

        /* if ($request->hasFile('image_akreditasi')) {
            $imageName = $request->prodi . '_image_akreditasi_' . date('YmdHis') . '.' . $request->file('image_akreditasi')->extension();
            $request->file('image_akreditasi')->move(public_path('images/akreditasi/'), $imageName);
            $akreditasi->image_akreditasi = $imageName;
        } */

        if ($data_mhs->save()) {
            return redirect()->route('data_mhs.index')->with('message', 'Data Mahasiswa Berhasil Disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menyimpan Data Mahasiswa.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(data_mhs $data_mhs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_mhs = data_mhs::find($id);

        return view('layouts.digitalisasi.data_mhs.edit', compact('data_mhs'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        /* $request->validate([
            'nim_mhs' => 'required|string|max:100',
            'nama_mhs' => 'required|string|max:100',
            'tempatlahir_mhs' => 'required|string|max:100',
            'tanggallahir_mhs' => 'required|date',
            'jumlah_semaktif' => 'required|string|max:10000',
            'jumlah_semcuti' => 'required|string|max:10000',
            'kode_prodi' => 'required|string|max:100',
            'nama_prodi' => 'required|string|max:100',
        ]); */

        $data_mhs = data_mhs::find($id);
        if (!$data_mhs) {
            return redirect()->back()->with('error', 'Data Mahasiswa tidak ditemukan');
        }
        $data_mhs->nim_mhs = $request->nim_mhs;
        $data_mhs->nama_mhs = $request->nama_mhs;
        $data_mhs->tempatlahir_mhs = $request->tempatlahir_mhs;
        $data_mhs->tanggallahir_mhs = $request->tanggallahir_mhs;
        $data_mhs->jumlah_semaktif = $request->jumlah_semaktif;
        $data_mhs->jumlah_semcuti = $request->jumlah_semcuti;
        $data_mhs->kode_prodi = $request->kode_prodi;
        $data_mhs->nama_prodi = $request->nama_prodi;

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

        if ($data_mhs->save()) {
            return redirect()->route('data_mhs.index')->with('message', 'Data Mahasiswa Berhasil Diedit.');
        } else {
            return redirect()->back()->with('error', 'Gagal Edit Data Mahasiswa.');
        }
        return redirect()->route('data_mhs.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data_mhs = data_mhs::find($id);
        if (!$data_mhs) {
            return redirect()->back()->with('error', 'Data Mahasiswa tidak ditemukan');
        }
        /* if ($akreditasi->image_akreditasi) {
            $existingImagePath = public_path('images/akreditasi/' . $akreditasi->image_akreditasi);
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        } */
        if ($data_mhs->delete()) {
            return redirect()->route('data_mhs.index')->with('message', 'Data Mahasiswa Berhasil Dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus Data Mahasiswa.');
        }
        return redirect()->route('data_mhs.index');
        //
    }
}
