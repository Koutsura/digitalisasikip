<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use App\Models\peserta;

class dataMhsExport implements FromCollection,WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return peserta::select('*')->get();
        //
    }

    public function map($peserta):array
    {
            return[
$peserta->nik,
$peserta->no_pendaftaran,
$peserta->nisn,
$peserta->npsn,
$peserta->email,
$peserta->nim ,
$peserta->no_kk ,
$peserta->nama_mahasiswa ,
$peserta->tempat_lahir ,
$peserta->tanggal_lahir ,
$peserta->jenis_kelamin ,
$peserta->alamat ,
$peserta->no_hp ,
$peserta->no_kip ,
$peserta->no_kks ,
$peserta->asal_sekolah ,
$peserta->kab_kota_sekolah,
$peserta->prov_sekolah ,
$peserta->nama_ayah ,
$peserta->pekerjaan_ayah ,
$peserta->penghasilan_ayah ,
$peserta->status_ayah ,
$peserta->nama_ibu ,
$peserta->pekerjaan_ibu ,
$peserta->penghasilan_ibu ,
$peserta->status_ibu ,
$peserta->jumlah_tanggungan ,
$peserta->kepemilikan_rumah ,
$peserta->tahun_perolehan_rumah ,
$peserta->sumber_listrik ,
$peserta->luas_tanah ,
$peserta->luas_bangunan ,
$peserta->sumber_air ,
$peserta->mck ,
$peserta->jarak_pusat_kota_km ,
// $peserta->created_at,
// $peserta->updated_at,


];


    }

    public function headings(): array
    {
        return [
            'NIK',
            'No Pendaftaran',
            'NISN',
            'NPSN',
            'Email',
            'NIM',
            'No KK',
            'Nama Mahasiswa',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Alamat',
            'No HP',
            'No KIP',
            'No KKS',
            'Asal Sekolah',
            'Kab/Kota Sekolah',
            'Provinsi Sekolah',
            'Nama Ayah',
            'Pekerjaan Ayah',
            'Penghasilan Ayah',
            'Status Ayah',
            'Nama Ibu',
            'Pekerjaan Ibu',
            'Penghasilan Ibu',
            'Status Ibu',
            'Jumlah Tanggungan',
            'Kepemilikan Rumah',
            'Tahun Perolehan Rumah',
            'Sumber Listrik',
            'Luas Tanah',
            'Luas Bangunan',
            'Sumber Air',
            'MCK',
            'Jarak ke Pusat Kota (km)',
        ];
    }
}
