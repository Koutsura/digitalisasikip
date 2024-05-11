@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Mahasiswa</h1>
            </div>

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="section-body">
                <div class="table-responsive">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <a href="{{ route('data_mhs.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                            <form action="{{ route('data_mhs.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Berdasarkan Nama Mahasiswa...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" style="margin-left:5px;" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nim Mahasiswa</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>jumlah semester aktif</th>
                                <th>jumlah semester Cuti</th>
                                <th>Kode Prodi</th>
                                <th>Nama Prodi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_mhs as $item)
                                <tr>
                                    <td>{{ $item->nim_mhs }}</td>
                                    <td>{{ $item->nama_mhs }}</td>
                                    <td>{{ $item->tempatlahir_mhs }}</td>
                                    <td>{{ $item->tanggallahir_mhs }}</td>
                                    <td>{{ $item->jumlah_semaktif }}</td>
                                    <td>{{ $item->jumlah_semcuti }}</td>
                                    <td>{{ $item->kode_prodi }}</td>
                                    <td>{{ $item->nama_prodi }}</td>

                                    <td>
                                        <a href="{{ route('data_mhs.edit', $item->nim_mhs) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('data_mhs.delete', $item->nim_mhs) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td> <!-- Add Edit and Delete buttons for each row -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
