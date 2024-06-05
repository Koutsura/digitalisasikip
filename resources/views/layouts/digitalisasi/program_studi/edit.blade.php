@extends('layouts.app')

@section('title', 'Edit Data Prodi')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Prodi</h1>
        </div>
        <form action="{{ route('program_studi.update', $program_studi->kode_prodi) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label for="kode_prodi">Kode Prodi</label>
                    <input type="text" name="kode_prodi" id="kode_prodi" class="form-control" value="{{ $program_studi->kode_prodi }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="nama_prodi">Nama Prodi</label>
                    <input type="text" name="nama_prodi" id="nama_prodi" class="form-control" value="{{ $program_studi->nama_prodi }}" maxlength="125">
                </div>

                <div class="form-group">
                    <label for="akreditasi_prodi">Akreditasi Prodi</label>
                    <input type="text" name="akreditasi_prodi" id="akreditasi_prodi" class="form-control" value="{{ $program_studi->ukt_spp }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="ukt_spp">UKT SPP</label>
                    <input type="text" name="ukt_spp" id="ukt_spp" class="form-control" value="{{ $program_studi->ukt_spp }}" maxlength="125">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
</div>
@endsection
