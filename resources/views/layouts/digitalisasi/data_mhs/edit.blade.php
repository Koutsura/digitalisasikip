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
        <form action="{{ route('data_mhs.update', $data_mhs->nim_mhs) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nim_mhs">NIM Mahasiswa</label>
                    <input type="text" name="nim_mhs" id="nim_mhs" class="form-control" value="{{ $data_mhs->nim_mhs }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="nama_mhs">Nama Mahasiswa</label>
                    <input type="text" name="nama_mhs" id="nama_mhs" class="form-control" value="{{ $data_mhs->nama_mhs }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="tempatlahir_mhs">Tempat Lahir</label>
                    <input type="text" name="tempatlahir_mhs" id="tempatlahir_mhs" class="form-control" value="{{ $data_mhs->tempatlahir_mhs }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="Tanggallahir_mhs">Tanggal Lahir</label>
                    <input type="date" name="Tanggallahir_mhs" id="Tanggallahir_mhs" class="form-control" value="{{ $data_mhs->Tanggallahir_mhs }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="jumlah_semaktif">Jumlah Semester Aktif</label>
                    <input type="text" name="jumlah_semaktif" id="jumlah_semaktif" class="form-control" value="{{ $data_mhs->jumlah_semaktif }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="jumlah_semcuti">Jumlah Semester Cuti</label>
                    <input type="text" name="jumlah_semcuti" id="jumlah_semcuti" class="form-control" value="{{ $data_mhs->jumlah_semcuti }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="kode_prodi">Kode Prodi</label>
                    <input type="text" name="kode_prodi" id="kode_prodi" class="form-control" value="{{ $data_mhs->kode_prodi }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="nama_prodi">Nama Prodi</label>
                    <input type="text" name="nama_prodi" id="nama_prodi" class="form-control" value="{{ $data_mhs->nama_prodi }}" maxlength="125">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
</div>
@endsection
