<?php

namespace App\Http\Controllers;

use App\Models\seleksi;
use Illuminate\Http\Request;

class SeleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        if ($search) {
            $data['seleksi'] = seleksi::where('no_pendaftaran', 'like', "%{$search}%")->get();
        } else {
            $data['seleksi'] = seleksi::all();
        }
        return view('layouts.digitalisasi.seleksi.index', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.digitalisasi.seleksi.create');
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

        $seleksi = new seleksi();
        $seleksi->no_pendaftaran = $request->no_pendaftaran;
        $seleksi->seleksi_penetapan = $request->seleksi_penetapan;
        $seleksi->ranking_penetapan = $request->ranking_penetapan;
        $seleksi->kategori_penetapan = $request->kategori_penetapan;
        $seleksi->skema_bantuan_pembiayaan = $request->skema_bantuan_pembiayaan;

        /* if ($request->hasFile('image_akreditasi')) {
            $imageName = $request->prodi . '_image_akreditasi_' . date('YmdHis') . '.' . $request->file('image_akreditasi')->extension();
            $request->file('image_akreditasi')->move(public_path('images/akreditasi/'), $imageName);
            $akreditasi->image_akreditasi = $imageName;
        } */

        if ($seleksi->save()) {
            return redirect()->route('seleksi.index')->with('message', 'Data Penetapan Berhasil Disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menyimpan Data Penetapan.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(seleksi $seleksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $seleksi= seleksi::find($id);

        return view('layouts.digitalisasi.seleksi.edit', compact('seleksi'));
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

        $seleksi = seleksi::find($id);
        if (!$seleksi) {
            return redirect()->back()->with('error', 'Data Penetapan tidak ditemukan');
        }
        $seleksi->no_pendaftaran = $request->no_pendaftaran;
        $seleksi->seleksi_penetapan = $request->seleksi_penetapan;
        $seleksi->ranking_penetapan = $request->ranking_penetapan;
        $seleksi->kategori_penetapan = $request->kategori_penetapan;
        $seleksi->skema_bantuan_pembiayaan = $request->skema_bantuan_pembiayaan;

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

        if ($seleksi->save()) {
            return redirect()->route('seleksi.index')->with('message', 'Data Penetapan Berhasil Diedit.');
        } else {
            return redirect()->back()->with('error', 'Gagal Edit Data Penetapan.');
        }
        return redirect()->route('seleksi.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $seleksi = seleksi::find($id);
        if (!$seleksi) {
            return redirect()->back()->with('error', 'Data Penetapan tidak ditemukan');
        }
        /* if ($akreditasi->image_akreditasi) {
            $existingImagePath = public_path('images/akreditasi/' . $akreditasi->image_akreditasi);
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        } */
        if ($seleksi->delete()) {
            return redirect()->route('seleksi.index')->with('message', 'Data Penetapan Berhasil Dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus Data Penetapan.');
        }
        return redirect()->route('seleksi.index');
        //
    }
}
