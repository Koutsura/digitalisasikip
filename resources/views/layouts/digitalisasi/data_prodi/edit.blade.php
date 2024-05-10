@extends('layouts.app')

@section('title', 'Edit Data Akreditasi')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Akreditasi</h1>
        </div>
        <form action="{{ route('akreditasi.update', $akreditasi->id_akreditasi) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <input type="text" name="prodi" id="prodi" class="form-control" value="{{ $akreditasi->prodi }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="jenjang">Jenjang</label>
                    <input type="text" name="jenjang" id="jenjang" class="form-control" value="{{ $akreditasi->jenjang }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="tanggal_berlaku">Tanggal Berlaku</label>
                    <input type="date" name="tanggal_berlaku" id="tanggal_berlaku" class="form-control" value="{{ $akreditasi->tanggal_berlaku }}">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" name="status" id="status" class="form-control" value="{{ $akreditasi->status }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="tanggal_berakhir">Tanggal Berakhir</label>
                    <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="form-control" value="{{ $akreditasi->tanggal_berakhir }}">
                </div>

                <div class="form-group">
                    <label for="peringkat">Peringkat</label>
                    <input type="text" name="peringkat" id="peringkat" class="form-control" value="{{ $akreditasi->peringkat }}" maxlength="1">
                </div>

                <div class="form-group">
                    <label for="sk_akreditasi">SK Akreditasi</label>
                    <input type="number" name="sk_akreditasi" id="sk_akreditasi" class="form-control" value="{{ $akreditasi->sk_akreditasi }}" min="0" max="99999999999">
                </div>

                <div class="form-group">
                    <label for="image_akreditasi">Gambar Akreditasi</label>
                    <input type="file" name="image_akreditasi" id="image_akreditasi" class="form-control" value="{{ $akreditasi->image_akreditasi }}" maxlength="125">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
</div>
@endsection
