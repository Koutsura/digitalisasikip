@extends('layouts.app')

@section('title', 'Data PT')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data PT</h1>
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
                            <a href="{{ route('data_pt.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                            <form action="{{ route('data_pt.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Berdasarkan Kode PT...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" style="margin-left:5px;" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pilih Kode PT</label>
                        <select id="kota" name="kota" class="form-control">
                            <option value=""></option>
                            <option value="Palembang">Palembang</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Indralaya">Indralaya</option>
                            <option value="Prabumulih">Prabumulih</option>
                            <option value="MuaraEnim">MuaraEnim</option>
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
                                <th>Kode Pt</th>
                                <th>Nama Pt</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_pt as $item)
                                <tr>
                                    <td>{{ $item->kode_pt }}</td>
                                    <td>{{ $item->nama_pt }}</td>

                                    <td>
                                        <a href="{{ route('data_pt.edit', $item->kode_pt) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('data_pt.delete', $item->kode_pt) }}" method="POST" style="display: inline-block;">
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
