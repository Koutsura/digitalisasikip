@extends('layouts.app')

@section('title', 'Tambah Data Perguruan Tinggi')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data PT</h1>
            </div>
                <form action="{{ route('perguruan_tinggi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="kode_pt">Kode Pt</label>
                        <input type="text" name="kode_pt" id="kode_pt" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="nama_pt">Nama Pt</label>
                        <input type="text" name="nama_pt" id="nama_pt" class="form-control" required maxlength="125">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
