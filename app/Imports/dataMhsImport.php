<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\peserta;
use Maatwebsite\Excel\Concerns\ToModel;


class dataMhsImport implements ToCollection, ToModel
{
    private $current =0;
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
        $this->current++;
        if($this->current > 1)
        {
            $peserta = new peserta;
$peserta->nik = $row[0];
$peserta->no_pendaftaran = $row[1];
$peserta->nisn = $row[2];
$peserta->npsn = $row[3];
$peserta->email = $row[4];
$peserta->nim = $row[5];
$peserta->no_kk = $row[6];
$peserta->nama_mahasiswa = $row[7];
$peserta->tempat_lahir = $row[8];
$peserta->tanggal_lahir = $row[9];
$peserta->jenis_kelamin = $row[10];
$peserta->alamat = $row[11];
$peserta->no_hp = $row[12];
$peserta->no_kip = $row[13];
$peserta->no_kks = $row[14];
$peserta->asal_sekolah = $row[15];
$peserta->kab_kota_sekolah = $row[16];
$peserta->prov_sekolah = $row[17];
$peserta->nama_ayah = $row[18];
$peserta->pekerjaan_ayah = $row[19];
$peserta->penghasilan_ayah = $row[20];
$peserta->status_ayah = $row[21];
$peserta->nama_ibu = $row[22];
$peserta->pekerjaan_ibu = $row[23];
$peserta->penghasilan_ibu = $row[24];
$peserta->status_ibu = $row[25];
$peserta->jumlah_tanggungan = $row[26];
$peserta->kepemilikan_rumah = $row[27];
$peserta->tahun_perolehan_rumah = $row[28];
$peserta->sumber_listrik = $row[29];
$peserta->luas_tanah = $row[30];
$peserta->luas_bangunan = $row[31];
$peserta->sumber_air = $row[32];
$peserta->mck = $row[33];
$peserta->jarak_pusat_kota_km = $row[34];
$peserta->save();



    }
    }
}
