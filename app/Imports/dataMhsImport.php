<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\peserta;
use Maatwebsite\Excel\Concerns\ToModel;


class dataMhsImport implements ToCollection, ToModel
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
        /* dd($collection); */
    }
    public function model(array $row)
    {
        return new peserta([
            'nik' => $row[0],
            'no_pendaftaran' => $row[1],
            'nisn' => $row[2],
            'npsn' => $row[3],
            'email' => $row[4],
            'nim' => $row[5],
            'no_kk' => $row[6],
            'nama_mahasiswa' => $row[7],
            'tempat_lahir' => $row[8],
            'tanggal_lahir' => $row[9],
            'jenis_kelamin' => $row[10],
            'alamat' => $row[11],
            'no_hp' => $row[12],
            'no_kip' => $row[13],
            'no_kks' => $row[14],
            'asal_sekolah' => $row[15],
            'kab_kota_sekolah' => $row[16],
            'prov_sekolah' => $row[17],
            'nama_ayah' => $row[18],
            'pekerjaan_ayah' => $row[19],
            'penghasilan_ayah' => $row[20],
            'status_ayah' => $row[21],
            'nama_ibu' => $row[22],
            'pekerjaan_ibu' => $row[23],
            'penghasilan_ibu' => $row[24],
            'status_ibu' => $row[25],
            'jumlah_tanggungan' => $row[26],
            'kepemilikan_rumah' => $row[27],
            'tahun_perolehan_rumah' => $row[28],
            'sumber_listrik' => $row[29],
            'luas_tanah' => $row[30],
            'luas_bangunan' => $row[31],
            'sumber_air' => $row[32],
            'mck' => $row[33],
            'jarak_pusat_kota_km' => $row[34],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
