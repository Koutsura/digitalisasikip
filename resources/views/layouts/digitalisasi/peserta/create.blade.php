@extends('layouts.app')

@section('title', 'Tambah Data Mahasiswa')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Mahasiswa</h1>
            </div>
                <form action="{{ route('peserta.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" id="nik" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="no_pendaftaran">No Pendaftaran</label>
                        <input type="number" name="no_pendaftaran" id="no_pendaftaran" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN</label>
                        <input type="text" name="nisn" id="nisn" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="npsn">NPSN</label>
                        <input type="text" name="npsn" id="npsn" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="no_kk">No KK</label>
                        <input type="text" name="no_kk" id="no_kk" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" required maxlength="200">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required maxlength="200">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required maxlength="255">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="no_kip">No KIP</label>
                        <input type="text" name="no_kip" id="no_kip" class="form-control" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="no_kks">No KKS</label>
                        <input type="text" name="no_kks" id="no_kks" class="form-control" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="kab_kota_sekolah">Kab/Kota Sekolah</label>
                        <input type="text" name="kab_kota_sekolah" id="kab_kota_sekolah" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="prov_sekolah">Provinsi Sekolah</label>
                        <input type="text" name="prov_sekolah" id="prov_sekolah" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah</label>
                        <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" required maxlength="200">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                        <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="penghasilan_ayah">Penghasilan Ayah</label>
                        <input type="text" name="penghasilan_ayah" id="penghasilan_ayah" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="status_ayah">Status Ayah</label>
                        <select name="status_ayah" id="status_ayah" class="form-control" required>
                            <option value="Hidup">Hidup</option>
                            <option value="Meninggal">Meninggal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu</label>
                        <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" required maxlength="200">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                        <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="penghasilan_ibu">Penghasilan Ibu</label>
                        <input type="text" name="penghasilan_ibu" id="penghasilan_ibu" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="status_ibu">Status Ibu</label>
                        <select name="status_ibu" id="status_ibu" class="form-control" required>
                            <option value="Hidup">Hidup</option>
                            <option value="Meninggal">Meninggal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
                        <input type="number" name="jumlah_tanggungan" id="jumlah_tanggungan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kepemilikan_rumah">Kepemilikan Rumah</label>
                        <input type="text" name="kepemilikan_rumah" id="kepemilikan_rumah" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="tahun_perolehan_rumah">Tahun Perolehan Rumah</label>
                        <input type="number" name="tahun_perolehan_rumah" id="tahun_perolehan_rumah" class="form-control" required min="1900" max="2099">
                    </div>
                    <div class="form-group">
                        <label for="sumber_listrik">Sumber Listrik</label>
                        <input type="text" name="sumber_listrik" id="sumber_listrik" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="luas_tanah">Luas Tanah (m2)</label>
                        <input type="number" name="luas_tanah" id="luas_tanah" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="luas_bangunan">Luas Bangunan (m2)</label>
                        <input type="number" name="luas_bangunan" id="luas_bangunan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="sumber_air">Sumber Air</label>
                        <input type="text" name="sumber_air" id="sumber_air" class="form-control" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="mck">MCK</label>
                        <input type="text" name="mck" id="mck" class="form-control" required maxlength="10">
                    </div>
                    <div class="form-group">
                        <label for="jarak_pusat_kota_km">Jarak ke Pusat Kota (km)</label>
                        <input type="number" name="jarak_pusat_kota_km" id="jarak_pusat_kota_km" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
