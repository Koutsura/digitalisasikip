@extends('layouts.app')

@section('title', 'Tambah Data akreditasi')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data akreditasi</h1>
            </div>
                <form action="{{ route('akreditasi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" name="prodi" id="prodi" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="jenjang">Jenjang</label>
                        <input type="text" name="jenjang" id="jenjang" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_berlaku">Tanggal Berlaku</label>
                        <input type="date" name="tanggal_berlaku" id="tanggal_berlaku" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" id="status" class="form-control" required maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_berakhir">Tanggal Akhir</label>
                        <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="peringkat">Peringkat</label>
                        <input type="text" name="peringkat" id="peringkat" class="form-control" required maxlength="1">
                    </div>
                    <div class="form-group">
                        <label for="sk_akreditasi">SK Akreditasi</label>
                        <input type="number" name="sk_akreditasi" id="sk_akreditasi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="image_akreditasi">image</label>
                        <input type="file" name="image_akreditasi" id="image_akreditasi" class="form-control" required maxlength="125">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
