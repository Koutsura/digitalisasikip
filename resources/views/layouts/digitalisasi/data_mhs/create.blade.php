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
                <form action="{{ route('data_mhs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nim_mhs">NIM Mahasiswa</label>
                        <input type="text" name="nim_mhs" id="nim_mhs" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="nama_mhs">Nama Mahasiswa</label>
                        <input type="text" name="nama_mhs" id="nama_mhs" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="tempatlahir_mhs">Tempat Lahir</label>
                        <input type="text" name="tempatlahir_mhs" id="tempatlahir_mhs" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="tanggallahir_mhs">Tanggal Lahir</label>
                        <input type="date" name="tanggallahir_mhs" id="tanggallahir_mhs" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label for="jumlah_semaktif">Jumlah Semester Aktif</label>
                        <input type="text" name="jumlah_semaktif" id="jumlah_semaktif" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_semcuti">Jumlah Semester Cuti</label>
                        <input type="text" name="jumlah_semcuti" id="jumlah_semcuti" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="kode_prodi">Kode Prodi</label>
                        <input type="text" name="kode_prodi" id="kode_prodi" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="nama_prodi">Nama Prodi</label>
                        <input type="text" name="nama_prodi" id="nama_prodi" class="form-control" required maxlength="125">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
