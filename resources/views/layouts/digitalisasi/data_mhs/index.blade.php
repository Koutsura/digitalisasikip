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

            {{--  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- jika menggunakan bootstrap4 gunakan css ini  -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
        <!-- cdn bootstrap4 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  --}}


            <div class="section-body">
                <div class="table-responsive">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            @if (auth()->user()->role == 'data_mhs' || auth()->user()->role == 'superadmin')
                            <a href="{{ route('data_mhs.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                            <a href="{{ route('data_mhs.import') }}" class="btn btn-primary mb-3">Import Data</a>
                            @endif
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

                    <form action="{{ route('data_mhs.index') }}" method="GET">
                                <div class="form-group">
                                    <label>Pilih Tempat Lahir Mahasiswa</label>
                                    <select id="tempatlahir_mhs" name="search" class="form-control">
                                        <option value=""></option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Lampung">Lampung</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Indralaya">Indralaya</option>
                                        <option value="Prabumulih">Prabumulih</option>
                                        <option value="Muara Enim">Muara Enim</option>
                                        <option value="Lahat">Lahat</option>
                                        <option value="PagarAlam">PagarAlam</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary ml-auto" type="submit">Search</button>
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
                                @if (auth()->user()->role == 'data_mhs' || auth()->user()->role == 'superadmin')
                                <th>Action</th>
                                @endif
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

                                    @if (auth()->user()->role == 'data_mhs' || auth()->user()->role == 'superadmin')
                                    <td>

                                        <a href="{{ route('data_mhs.edit', $item->nim_mhs) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('data_mhs.delete', $item->nim_mhs) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td> <!-- Add Edit and Delete buttons for each row -->
                                    @endif
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <!-- js untuk bootstrap4  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
        <!-- js untuk select2  -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#kota").select2({
                    theme: 'bootstrap4',
                    placeholder: "Please Select"
                });

                $("#kota2").select2({
                    theme: 'bootstrap4',
                    placeholder: "Please Select"
                });
            });
        </script>
