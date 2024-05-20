@extends('layouts.app')

@section('title', 'Batch Mahasiswa')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Batch 1</h5>
                            <p class="card-text">Deskripsi atau informasi tambahan tentang Batch 1.</p>
                            <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Batch 2</h5>
                            <p class="card-text">Deskripsi atau informasi tambahan tentang Batch 2.</p>
                            <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Batch 3</h5>
                            <p class="card-text">Deskripsi atau informasi tambahan tentang Batch 3.</p>
                            <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
