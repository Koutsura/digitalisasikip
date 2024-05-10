@extends('layouts.app')

@section('title', 'akreditasi')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Akreditasi</h1>
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
                            <a href="{{ route('akreditasi.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                            <form action="{{ route('akreditasi.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Berdasarkan ID Akreditasi...">
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
                                <th>ID Akreditasi</th>
                                <th>Prodi</th>
                                <th>Jenjang</th>
                                <th>Tanggal Berlaku</th>
                                <th>Status</th>
                                <th>Tanggal Berakhir</th>
                                <th>Peringkat</th>
                                <th>SK Akreditasi</th>
                                <th>Image_akreditasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($akreditasi as $item)
                                <tr>
                                    <td>{{ $item->id_akreditasi }}</td>
                                    <td>{{ $item->prodi }}</td>
                                    <td>{{ $item->jenjang }}</td>
                                    <td>{{ $item->tanggal_berlaku }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->tanggal_berakhir }}</td>
                                    <td>{{ $item->peringkat }}</td>
                                    <td>{{ $item->sk_akreditasi }}</td>
                                    <td><img src="{{ asset('images/akreditasi/' . $item->image_akreditasi) }}" alt="image_akreditasi" style="max-width:100px; max-height:100px;"></td>
                                    <td>
                                        <a href="{{ route('akreditasi.edit', $item->id_akreditasi) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('akreditasi.delete', $item->id_akreditasi) }}" method="POST" style="display: inline-block;">
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
