<?php

namespace App\Http\Controllers;

use App\Models\peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
$query = peserta::query();

if ($search) {
    // Jika ada pencarian, tambahkan kondisi untuk nama_mhs
    $query->where('nik', 'like', "%{$search}%");
}

if ($search) {
    // Jika ada pencarian, tambahkan kondisi untuk tempatlahir_mhs
    $query->orWhere('tempat_lahir', 'like', "%{$search}%");
}

// Dapatkan hasil query
$data['peserta'] = $query->get();

return view('layouts.digitalisasi.peserta.index', $data);


        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.digitalisasi.peserta.create');
        //
    }

    public function import()
    {
        return view('layouts.digitalisasi.peserta.import');
        //
    }

    public function import_post(Request $request)
    {
        // dd($request->all());
        Excel::import(new dataMhsImport, $request->file('excel_file'));
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

        $peserta = new peserta();
        $peserta->nik = $request->nik;
        $peserta->no_pendaftaran = $request-> no_pendaftaran;
        $peserta->nisn = $request-> nisn;
        $peserta->npsn = $request-> npsn;
        $peserta->email = $request-> email;
        $peserta->nim = $request-> nim;
        $peserta->no_kk = $request-> no_kk;
        $peserta->nama_mahasiswa = $request-> nama_mahasiswa;
        $peserta->tempat_lahir = $request-> tempat_lahir;
        $peserta->tanggal_lahir = $request-> tanggal_lahir;
        $peserta->jenis_kelamin = $request-> jenis_kelamin;
        $peserta->alamat = $request-> alamat;
        $peserta->no_hp = $request-> no_hp;
        $peserta->no_kip = $request-> no_kip;
        $peserta->no_kks = $request-> no_kks;
        $peserta->asal_sekolah = $request-> asal_sekolah;
        $peserta->kab_kota_sekolah = $request-> kab_kota_sekolah;
        $peserta->prov_sekolah = $request-> prov_sekolah;
        $peserta->nama_ayah = $request-> nama_ayah;
        $peserta->pekerjaan_ayah = $request-> pekerjaan_ayah;
        $peserta->penghasilan_ayah = $request-> penghasilan_ayah;
        $peserta->status_ayah = $request-> status_ayah;
        $peserta->nama_ibu = $request-> nama_ibu;
        $peserta->pekerjaan_ibu = $request-> pekerjaan_ibu;
        $peserta->penghasilan_ibu = $request-> penghasilan_ibu;
        $peserta->status_ibu = $request-> status_ibu;
        $peserta->jumlah_tanggungan = $request-> jumlah_tanggungan;
        $peserta->kepemilikan_rumah = $request-> kepemilikan_rumah;
        $peserta->tahun_perolehan_rumah = $request-> tahun_perolehan_rumah;
        $peserta->sumber_listrik = $request-> sumber_listrik;
        $peserta->luas_tanah = $request-> luas_tanah;
        $peserta->luas_bangunan = $request-> luas_bangunan;
        $peserta->sumber_air = $request-> sumber_air;
        $peserta->mck = $request-> mck;
        $peserta->jarak_pusat_kota_km = $request-> jarak_pusat_kota_km;


        /* if ($request->hasFile('image_akreditasi')) {
            $imageName = $request->prodi . '_image_akreditasi_' . date('YmdHis') . '.' . $request->file('image_akreditasi')->extension();
            $request->file('image_akreditasi')->move(public_path('images/akreditasi/'), $imageName);
            $akreditasi->image_akreditasi = $imageName;
        } */

        if ($peserta->save()) {
            return redirect()->route('peserta.index')->with('message', 'Data Mahasiswa Berhasil Disimpan.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menyimpan Data Mahasiswa.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $peserta = peserta::find($id);

        return view('layouts.digitalisasi.peserta.edit', compact('peserta'));
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

        $peserta = peserta::find($id);
        if (!$peserta) {
            return redirect()->back()->with('error', 'Data Mahasiswa tidak ditemukan');
        }
        $peserta->nik = $request->nik;
        $peserta->no_pendaftaran = $request-> no_pendaftaran;
        $peserta->nisn = $request-> nisn;
        $peserta->npsn = $request-> npsn;
        $peserta->email = $request-> email;
        $peserta->nim = $request-> nim;
        $peserta->no_kk = $request-> no_kk;
        $peserta->nama_mahasiswa = $request-> nama_mahasiswa;
        $peserta->tempat_lahir = $request-> tempat_lahir;
        $peserta->tanggal_lahir = $request-> tanggal_lahir;
        $peserta->jenis_kelamin = $request-> jenis_kelamin;
        $peserta->alamat = $request-> alamat;
        $peserta->no_hp = $request-> no_hp;
        $peserta->no_kip = $request-> no_kip;
        $peserta->no_kks = $request-> no_kks;
        $peserta->asal_sekolah = $request-> asal_sekolah;
        $peserta->kab_kota_sekolah = $request-> kab_kota_sekolah;
        $peserta->prov_sekolah = $request-> prov_sekolah;
        $peserta->nama_ayah = $request-> nama_ayah;
        $peserta->pekerjaan_ayah = $request-> pekerjaan_ayah;
        $peserta->penghasilan_ayah = $request-> penghasilan_ayah;
        $peserta->status_ayah = $request-> status_ayah;
        $peserta->nama_ibu = $request-> nama_ibu;
        $peserta->pekerjaan_ibu = $request-> pekerjaan_ibu;
        $peserta->penghasilan_ibu = $request-> penghasilan_ibu;
        $peserta->status_ibu = $request-> status_ibu;
        $peserta->jumlah_tanggungan = $request-> jumlah_tanggungan;
        $peserta->kepemilikan_rumah = $request-> kepemilikan_rumah;
        $peserta->tahun_perolehan_rumah = $request-> tahun_perolehan_rumah;
        $peserta->sumber_listrik = $request-> sumber_listrik;
        $peserta->luas_tanah = $request-> luas_tanah;
        $peserta->luas_bangunan = $request-> luas_bangunan;
        $peserta->sumber_air = $request-> sumber_air;
        $peserta->mck = $request-> mck;
        $peserta->jarak_pusat_kota_km = $request-> jarak_pusat_kota_km;

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

        if ($peserta->save()) {
            return redirect()->route('peserta.index')->with('message', 'Data Mahasiswa Berhasil Diedit.');
        } else {
            return redirect()->back()->with('error', 'Gagal Edit Data Mahasiswa.');
        }
        return redirect()->route('peserta.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $peserta = peserta::find($id);
        if (!$peserta) {
            return redirect()->back()->with('error', 'Data Mahasiswa tidak ditemukan');
        }
        /* if ($akreditasi->image_akreditasi) {
            $existingImagePath = public_path('images/akreditasi/' . $akreditasi->image_akreditasi);
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        } */
        if ($peserta->delete()) {
            return redirect()->route('peserta.index')->with('message', 'Data Mahasiswa Berhasil Dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal Menghapus Data Mahasiswa.');
        }
        return redirect()->route('peserta.index');
        //
    }
}