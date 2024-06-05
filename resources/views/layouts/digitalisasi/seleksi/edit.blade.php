@extends('layouts.app')

@section('title', 'Edit Data Penetapan')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Penetapan</h1>
        </div>
        <form action="{{ route('seleksi.update', $seleksi->no_pendaftaran) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label for="no_pendaftaran">No Pendaftaran</label>
                    <input type="text" name="no_pendaftaran" id="no_pendaftaran" class="form-control" value="{{ $seleksi->no_pendaftaran }}" maxlength="11">
                </div>

                <div class="form-group">
                    <label for="seleksi_penetapan">Seleksi Penetapan</label>
                    <input type="text" name="seleksi_penetapan" id="seleksi_penetapan" class="form-control" value="{{ $seleksi->seleksi_penetapan }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="ranking_penetapan">Ranking Penetapan</label>
                    <input type="text" name="ranking_penetapan" id="ranking_penetapan" class="form-control" value="{{ $seleksi->ranking_penetapan }}" maxlength="11">
                </div>

                <div class="form-group">
                    <label for="kategori_penetapan">Kategori Penetapan</label>
                    <input type="text" name="kategori_penetapan" id="kategori_penetapan" class="form-control" value="{{ $seleksi->kategori_penetapan }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="skema_bantuan_pembiayaan">Skema Bantuan Pembiayaan</label>
                    <input type="text" name="skema_bantuan_pembiayaan" id="skema_bantuan_pembiayaan" class="form-control" value="{{ $seleksi->skema_bantuan_pembiayaan }}" maxlength="100">
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
</div>
@endsection
