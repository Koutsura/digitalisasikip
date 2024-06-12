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
                            @if (auth()->user()->role == 'peserta' || auth()->user()->role == 'superadmin')
                            {{-- <a href="{{ route('peserta.create') }}" class="btn btn-primary mb-3">Tambah Data</a> --}}
                            <a href="{{ route('peserta.import') }}" class="btn btn-primary mb-3">Import Data</a>
                            <form action="{{ route('peserta.export') }}" method="GET">
                                <button type="submit" class="btn btn-success">Unduh Excel</button>
                            </form>
                            @endif
                            <form action="{{ route('peserta.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Berdasarkan NIK Mahasiswa...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" style="margin-left:5px;" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <form action="{{ route('peserta.index') }}" method="GET">
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
                                        <button class="btn btn-primary ml-auto" type="submit">Cari</button>
                                    </div>
                                </div>






                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                {{-- <th>

                                </th> --}}
                                <th>NIK</th>
                                <th>No Pendaftaran</th>
                                <th>NISN</th>
                                <th>NPSN</th>
                                <th>Email</th>
                                <th>NIM</th>
                                <th>No KK</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>No KIP</th>
                                <th>No KKS</th>
                                <th>Asal Sekolah</th>
                                <th>Kab/Kota Asal Sekolah</th>
                                <th>Provinsi Asal Sekolah</th>
                                <th>Nama Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Penghasilan Ayah</th>
                                <th>Status Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Penghasilan Ibu</th>
                                <th>Status Ibu</th>
                                <th>Jumlah Tanggungan</th>
                                <th>Kepemilikan Rumah</th>
                                <th>Tahun Perolehan Rumah</th>
                                <th>Sumber Listrik</th>
                                <th>Luas Tanah</th>
                                <th>Luas Bangunan</th>
                                <th>Sumber Air</th>
                                <th>MCK</th>
                                <th>Jarak Pusat Kota (km)</th>

                                @if (auth()->user()->role == 'peserta' || auth()->user()->role == 'superadmin')
                                <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peserta as $item)
                                <tr>
                                    {{-- <td>
                                        <input type="checkbox" class="select_item" value="{{ $item->nik }}">
                                    </td> --}}

<td>{{ $item->nik }}</td>
<td>{{ $item->no_pendaftaran }}</td>
<td>{{ $item->nisn }}</td>
<td>{{ $item->npsn }}</td>
<td>{{ $item->email }}</td>
<td>{{ $item->nim }}</td>
<td>{{ $item->no_kk }}</td>
<td>{{ $item->nama_mahasiswa }}</td>
<td>{{ $item->tempat_lahir }}</td>
<td>{{ $item->tanggal_lahir }}</td>
<td>{{ $item->jenis_kelamin }}</td>
<td>{{ $item->alamat }}</td>
<td>{{ $item->no_hp }}</td>
<td>{{ $item->no_kip }}</td>
<td>{{ $item->no_kks }}</td>
<td>{{ $item->asal_sekolah }}</td>
<td>{{ $item->kab_kota_sekolah }}</td>
<td>{{ $item->prov_sekolah }}</td>
<td>{{ $item->nama_ayah }}</td>
<td>{{ $item->pekerjaan_ayah }}</td>
<td>{{ $item->penghasilan_ayah }}</td>
<td>{{ $item->status_ayah }}</td>
<td>{{ $item->nama_ibu }}</td>
<td>{{ $item->pekerjaan_ibu }}</td>
<td>{{ $item->penghasilan_ibu }}</td>
<td>{{ $item->status_ibu }}</td>
<td>{{ $item->jumlah_tanggungan }}</td>
<td>{{ $item->kepemilikan_rumah }}</td>
<td>{{ $item->tahun_perolehan_rumah }}</td>
<td>{{ $item->sumber_listrik }}</td>
<td>{{ $item->luas_tanah }}</td>
<td>{{ $item->luas_bangunan }}</td>
<td>{{ $item->sumber_air }}</td>
<td>{{ $item->mck }}</td>
<td>{{ $item->jarak_pusat_kota_km }}</td>


                                    @if (auth()->user()->role == 'peserta' || auth()->user()->role == 'superadmin')
                                    <td>

                                        <a href="{{ route('peserta.edit', $item->nik) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('peserta.delete', $item->nik) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
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
