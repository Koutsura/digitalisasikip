@extends('layouts.app')

@section('title', 'Edit Data PT')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data PT</h1>
        </div>
        <form action="{{ route('data_pt.update', $data_pt->kode_pt) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')



                <div class="form-group">
                    <label for="kode_pt">Kode Pt</label>
                    <input type="text" name="kode_pt" id="kode_pt" class="form-control" value="{{ $data_pt->kode_pt }}" maxlength="100">
                </div>

                <div class="form-group">
                    <label for="nama_pt">Nama Pt</label>
                    <input type="text" name="nama_pt" id="nama_pt" class="form-control" value="{{ $data_pt->nama_pt }}" maxlength="125">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
</div>
@endsection
