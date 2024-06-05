<?php

namespace App\Http\Controllers;

use App\Models\program_studi;
use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        if ($search) {
            $data['program_studi'] = program_studi::where('kode_prodi', 'like', "%{$search}%")->get();
        } else {
            $data['program_studi'] = program_studi::all();
        }
        return view('layouts.digitalisasi.program_studi.index', $data);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.digitalisasi.program_studi.create');
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

        $program_studi = new program_studi();
        $program_studi->kode_prodi = $request->kode_prodi;
        $program_studi->nama_prodi = $request->nama_prodi;
        $program_studi->akreditasi_prodi = $request->akreditasi_prodi;
        $program_studi->ukt_spp = $request->ukt_spp;

        /* if ($request->hasFile('image_akreditasi')) {
            $imageName = $request->prodi . '_image_akreditasi_' . date('YmdHis') . '.' . $request->file('image_akreditasi')->extension();
            $request->file('image_akreditasi')->move(public_path('images/akreditasi/'), $imageName);
            $akreditasi->image_akreditasi = $imageName;
        } */

        if ($program_studi->save()) {
            return redirect()->route('program_studi.index')->with('message', 'Data Prodi Berhasil Disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menyimpan Data Prodi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(program_studi $program_studi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $program_studi= program_studi::find($id);

        return view('layouts.digitalisasi.program_studi.edit', compact('program_studi'));
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

        $program_studi = program_studi::find($id);
        if (!$program_studi) {
            return redirect()->back()->with('error', 'Data Prodi tidak ditemukan');
        }
        $program_studi->kode_prodi = $request->kode_prodi;
        $program_studi->nama_prodi = $request->nama_prodi;
        $program_studi->akreditasi_prodi = $request->akreditasi_prodi;
        $program_studi->ukt_spp = $request->ukt_spp;

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

        if ($program_studi->save()) {
            return redirect()->route('program_studi.index')->with('message', 'Data Prodi Berhasil Diedit.');
        } else {
            return redirect()->back()->with('error', 'Gagal Edit Data Prodi.');
        }
        return redirect()->route('program_studi.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $program_studi = program_studi::find($id);
        if (!$program_studi) {
            return redirect()->back()->with('error', 'Data Prodi tidak ditemukan');
        }
        /* if ($akreditasi->image_akreditasi) {
            $existingImagePath = public_path('images/akreditasi/' . $akreditasi->image_akreditasi);
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        } */
        if ($program_studi->delete()) {
            return redirect()->route('program_studi.index')->with('message', 'Data Prodi Berhasil Dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus Data Prodi.');
        }
        return redirect()->route('program_studi.index');
        //
    }
}
