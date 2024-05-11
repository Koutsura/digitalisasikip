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
        <form action="{{ route('data_prodi.update', $data_prodi->kode_prodi) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label for="kode_prodi">Kode Prodi</label>
                    <input type="text" name="kode_prodi" id="kode_prodi" class="form-control" value="{{ $data_prodi->kode_prodi }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="nama_prodi">Nama Prodi</label>
                    <input type="text" name="nama_prodi" id="nama_prodi" class="form-control" value="{{ $data_prodi->nama_prodi }}" maxlength="125">
                </div>

                <div class="form-group">
                    <label for="kode_pt">Kode Pt</label>
                    <input type="text" name="kode_pt" id="kode_pt" class="form-control" value="{{ $data_prodi->kode_pt }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="nama_pt">Nama Pt</label>
                    <input type="text" name="nama_pt" id="nama_pt" class="form-control" value="{{ $data_prodi->nama_pt }}" maxlength="125">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
</div>
@endsection
