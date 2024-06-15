@extends('layouts.app')

@section('title', 'Edit Data Mahasiswa')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Mahasiswa</h1>
        </div>
        <form action="{{ route('peserta.update', $peserta->nik) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" name="nik" id="nik" class="form-control" value="{{ $peserta->nik }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="no_pendaftaran">No Pendaftaran</label>
                    <input type="number" name="no_pendaftaran" id="no_pendaftaran" class="form-control" value="{{ $peserta->no_pendaftaran }}">
                </div>
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" name="nisn" id="nisn" class="form-control" value="{{ $peserta->nisn }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="npsn">NPSN</label>
                    <input type="text" name="npsn" id="npsn" class="form-control" value="{{ $peserta->npsn }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $peserta->email }}" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control" value="{{ $peserta->nim }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="no_kk">No KK</label>
                    <input type="text" name="no_kk" id="no_kk" class="form-control" value="{{ $peserta->no_kk }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                    <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" value="{{ $peserta->nama_mahasiswa }}" maxlength="200">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="{{ $peserta->tempat_lahir }}" maxlength="200">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="{{ $peserta->tanggal_lahir }}">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">Jenis Kelamin
                        <option value="L" {{ $peserta->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $peserta->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $peserta->alamat }}" maxlength="255">
                </div>
                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{ $peserta->no_hp }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="no_kip">No KIP</label>
                    <input type="text" name="no_kip" id="no_kip" class="form-control" value="{{ $peserta->no_kip }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="no_kks">No KKS</label>
                    <input type="text" name="no_kks" id="no_kks" class="form-control" value="{{ $peserta->no_kks }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" value="{{ $peserta->asal_sekolah }}" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="kab_kota_sekolah">Kabupaten/Kota Sekolah</label>
                    <input type="text" name="kab_kota_sekolah" id="kab_kota_sekolah" class="form-control" value="{{ $peserta->kab_kota_sekolah }}" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="prov_sekolah">Provinsi Sekolah</label>
                    <input type="text" name="prov_sekolah" id="prov_sekolah" class="form-control" value="{{ $peserta->prov_sekolah }}" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="nama_ayah">Nama Ayah</label>
                    <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" value="{{ $peserta->nama_ayah }}" maxlength="200">
                </div>
                <div class="form-group">
                    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" value="{{ $peserta->pekerjaan_ayah }}" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="penghasilan_ayah">Penghasilan Ayah</label>
                    <input type="text" name="penghasilan_ayah" id="penghasilan_ayah" class="form-control" value="{{ $peserta->penghasilan_ayah }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="status_ayah">Status Ayah</label>
                    <select name="status_ayah" id="status_ayah" class="form-control">
                        <option value="Hidup" {{ $peserta->status_ayah == 'Hidup' ? 'selected' : '' }}>Hidup</option>
                        <option value="Meninggal" {{ $peserta->status_ayah == 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_ibu">Nama Ibu</label>
                    <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" value="{{ $peserta->nama_ibu }}" maxlength="200">
                </div>
                <div class="form-group">
                    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" value="{{ $peserta->pekerjaan_ibu }}" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="penghasilan_ibu">Penghasilan Ibu</label>
                    <input type="text" name="penghasilan_ibu" id="penghasilan_ibu" class="form-control" value="{{ $peserta->penghasilan_ibu }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="status_ibu">Status Ibu</label>
                    <select name="status_ibu" id="status_ibu" class="form-control">
                        <option value="Hidup" {{ $peserta->status_ibu == 'Hidup' ? 'selected' : '' }}>Hidup</option>
                        <option value="Meninggal" {{ $peserta->status_ibu == 'Meninggal' ? 'selected' : '' }}>Meninggal</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
                    <input type="number" name="jumlah_tanggungan" id="jumlah_tanggungan" class="form-control" value="{{ $peserta->jumlah_tanggungan }}">
                </div>
                <div class="form-group">
                    <label for="kepemilikan_rumah">Kepemilikan Rumah</label>
                    <input type="text" name="kepemilikan_rumah" id="kepemilikan_rumah" class="form-control" value="{{ $peserta->kepemilikan_rumah }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="tahun_perolehan_rumah">Tahun Perolehan Rumah</label>
                    <input type="number" name="tahun_perolehan_rumah" id="tahun_perolehan_rumah" class="form-control" value="{{ $peserta->tahun_perolehan_rumah }}" min="1900" max="2100">
                </div>
                <div class="form-group">
                    <label for="sumber_listrik">Sumber Listrik</label>
                    <input type="text" name="sumber_listrik" id="sumber_listrik" class="form-control" value="{{ $peserta->sumber_listrik }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="luas_tanah">Luas Tanah</label>
                    <input type="number" name="luas_tanah" id="luas_tanah" class="form-control" value="{{ $peserta->luas_tanah }}">
                </div>
                <div class="form-group">
                    <label for="luas_bangunan">Luas Bangunan</label>
                    <input type="number" name="luas_bangunan" id="luas_bangunan" class="form-control" value="{{ $peserta->luas_bangunan }}">
                </div>
                <div class="form-group">
                    <label for="sumber_air">Sumber Air</label>
                    <input type="text" name="sumber_air" id="sumber_air" class="form-control" value="{{ $peserta->sumber_air }}" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="mck">MCK</label>
                    <input type="text" name="mck" id="mck" class="form-control" value="{{ $peserta->mck }}" maxlength="10">
                </div>
                <div class="form-group">
                    <label for="jarak_pusat_kota_km">Jarak ke Pusat Kota (km)</label>
                    <input type="number" name="jarak_pusat_kota_km" id="jarak_pusat_kota_km" class="form-control" value="{{ $peserta->jarak_pusat_kota_km }}">
                </div>

                <div class="form-group">
                    <label for="program_studi">Program Studi</label>
                    <input type="text" name="program_studi" id="program_studi" class="form-control" value="{{ $peserta->program_studi }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="perguruan_tinggi">Perguruan Tinggi</label>
                    <select name="perguruan_tinggi" id="jenis_kelamin" class="form-control">Perguruan Tinggi
                        <option value="Universitas Bina Darma" {{ $peserta->perguruan_tinggi == 'Universitas Bina Darma' ? 'selected' : '' }}>Universitas Bina Darma</option>
                        <option value="Universitas Lampung (UNILA)" {{ $peserta->perguruan_tinggi == 'Universitas Lampung (UNILA)' ? 'selected' : '' }}>Universitas Lampung (UNILA)</option>
                        <option value="Universitas Sriwijaya" {{ $peserta->perguruan_tinggi == 'Universitas Sriwijaya' ? 'selected' : '' }}>Universitas Sriwijaya</option>
                        <option value="POLITEKNIK NEGERI SRIWIJAYA (POLSRI)" {{ $peserta->perguruan_tinggi == 'POLITEKNIK NEGERI SRIWIJAYA (POLSRI)' ? 'selected' : '' }}>POLITEKNIK NEGERI SRIWIJAYA (POLSRI)</option>
                        <option value="Universitas Mitra Indonesia (UMITRA)" {{ $peserta->perguruan_tinggi == 'Universitas Mitra Indonesia (UMITRA)' ? 'selected' : '' }}>Universitas Mitra Indonesia (UMITRA)</option>
                        <option value="Universitas Teknokrat Indonesia" {{ $peserta->perguruan_tinggi == 'L' ? 'Universitas Teknokrat Indonesia' : '' }}>Universitas Teknokrat Indonesia</option>
                        <option value="Institut Teknologi dan Bisnis PalComTech Palembang" {{ $peserta->perguruan_tinggi == 'Institut Teknologi dan Bisnis PalComTech Palembang' ? 'selected' : '' }}>Institut Teknologi dan Bisnis PalComTech Palembang</option>
                        <option value="Universitas Aisyah Pringsewu" {{ $peserta->perguruan_tinggi == 'Universitas Aisyah Pringsewu' ? 'selected' : '' }}>Universitas Aisyah Pringsewu</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
</div>
@endsection
