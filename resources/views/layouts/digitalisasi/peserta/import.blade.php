@extends('layouts.app')

@section('title', 'Import Data Mahasiswa')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Import Data Mahasiswa</h1>
            </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="import_data" class="form-label">Upload Data Mahasiswa</label>
                        <input class="form-control" type="file" id="import_data" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
