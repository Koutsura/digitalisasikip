@extends('layouts.app')

@section('title', 'Tambah Penetapan')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Penetapan</h1>
            </div>
                <form action="{{ route('seleksi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="no_pendaftaran">No Pendaftaran</label>
                        <input type="number" name="no_pendaftaran" id="no_pendaftaran" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="seleksi_penetapan">Seleksi Penetapan</label>
                        <input type="text" name="seleksi_penetapan" id="seleksi_penetapan" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="ranking_penetapan">Ranking Penetapan</label>
                        <input type="number" name="ranking_penetapan" id="ranking_penetapan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori_penetapan">Kategori Penetapan</label>
                        <input type="text" name="kategori_penetapan" id="kategori_penetapan" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="skema_bantuan_pembiayaan">Skema Bantuan Pembiayaan</label>
                        <input type="number" name="skema_bantuan_pembiayaan" id="skema_bantuan_pembiayaan" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
