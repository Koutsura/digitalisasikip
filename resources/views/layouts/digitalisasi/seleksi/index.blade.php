@extends('layouts.app')

@section('title', 'Penetapan')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Penetapan</h1>
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
                            <a href="{{ route('seleksi.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                            <form action="{{ route('seleksi.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Berdasarkan No Pendaftaran...">
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
                                <th>No Pendaftaran</th>
                                <th>Seleksi Penetapan</th>
                                <th>Ranking Penetapan</th>
                                <th>Kategori Penetapan</th>
                                <th>Skema Bantuan Pembiayaan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seleksi as $item)
                                <tr>
                                    <td>{{ $item->no_pendaftaran }}</td>
                                    <td>{{ $item->seleksi_penetapan }}</td>
                                    <td>{{ $item->ranking_penetapan }}</td>
                                    <td>{{ $item->kategori_penetapan }}</td>
                                    <td>{{ $item->skema_bantuan_pembiayaan }}</td>

                                    <td>
                                        <a href="{{ route('seleksi.edit', $item->no_pendaftaran) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('seleksi.delete', $item->no_pendaftaran) }}" method="POST" style="display: inline-block;">
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
