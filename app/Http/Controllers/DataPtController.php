<?php

namespace App\Http\Controllers;

use App\Models\data_pt;
use Illuminate\Http\Request;

class DataPtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        if ($search) {
            $data['data_pt'] = data_pt::where('kode_pt', 'like', "%{$search}%")->get();
        } else {
            $data['data_pt'] = data_pt::all();
        }
        return view('layouts.digitalisasi.data_pt.index', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.digitalisasi.data_pt.create');
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

        $data_pt = new data_pt();
        $data_pt->kode_pt = $request->kode_pt;
        $data_pt->nama_pt = $request->nama_pt;

        /* if ($request->hasFile('image_akreditasi')) {
            $imageName = $request->prodi . '_image_akreditasi_' . date('YmdHis') . '.' . $request->file('image_akreditasi')->extension();
            $request->file('image_akreditasi')->move(public_path('images/akreditasi/'), $imageName);
            $akreditasi->image_akreditasi = $imageName;
        } */

        if ($data_pt->save()) {
            return redirect()->route('data_pt.index')->with('message', 'Data PT Berhasil Disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menyimpan Data PT.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(data_pt $data_pt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_pt= data_pt::find($id);

        return view('layouts.digitalisasi.data_pt.edit', compact('data_pt'));
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

        $data_pt = data_pt::find($id);
        if (!$data_pt) {
            return redirect()->back()->with('error', 'Data PT tidak ditemukan');
        }
        $data_pt->kode_pt = $request->kode_pt;
        $data_pt->nama_pt = $request->nama_pt;

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

        if ($data_pt->save()) {
            return redirect()->route('data_pt.index')->with('message', 'Data PT Berhasil Diedit.');
        } else {
            return redirect()->back()->with('error', 'Gagal Edit Data PT.');
        }
        return redirect()->route('data_pt.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data_pt = data_pt::find($id);
        if (!$data_pt) {
            return redirect()->back()->with('error', 'Data PT tidak ditemukan');
        }
        /* if ($akreditasi->image_akreditasi) {
            $existingImagePath = public_path('images/akreditasi/' . $akreditasi->image_akreditasi);
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        } */
        if ($data_pt->delete()) {
            return redirect()->route('data_pt.index')->with('message', 'Data PT Berhasil Dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus Data PT.');
        }
        return redirect()->route('data_pt.index');
        //
    }
}
