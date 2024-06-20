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
                <div class="row mb-3">
                    <div class="col-md-6">
                        @if (auth()->user()->role == 'peserta' || auth()->user()->role == 'superadmin')
                            <a href="{{ route('peserta.downloadTemplate') }}" class="btn btn-info me-1"><i class="fa fa-download"></i> Download Template</a>
                            <a href="{{ route('peserta.import') }}" class="btn btn-primary me-1"><i class="fa fa-upload"></i> Import Data</a>
                            <a href="{{ route('peserta.export') }}" method="GET" class="btn btn-success"><i class="fa fa-download"></i> Download Data</a>
                            {{-- <form action="{{ route('peserta.export') }}" method="GET">
                                <button type="submit" class="btn btn-success">Unduh Excel</button>
                            </form> --}}
                        @endif
                        <div class="row mb-3 mt-3">
                            <div class="col-md-6">
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ubah Status Mahasiswa
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item change-status" data-status="Diajukan" href="{{ route('peserta.index') }}">Diajukan</a>
                                        <a class="dropdown-item change-status" data-status="Dibatalkan" href="{{ route('peserta.index') }}">Dibatalkan</a>
                                        <a class="dropdown-item change-status" data-status="Lulus" href="{{ route('peserta.index') }}">Lulus</a>
                                        <a class="dropdown-item change-status" data-status="Cuti" href="{{ route('peserta.index') }}">Cuti</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="{{ route('peserta.index') }}" method="GET">
                            <div class="input-group mt-3">
                                <input type="text" name="search" class="form-control" placeholder="Cari Berdasarkan NIK Mahasiswa...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary ms-2" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">

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
                                <button class="btn btn-primary mt-2" type="submit">Cari</button>
                            </div>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Status Pengajuan</th>
                                    <th>Permohonan Pencairan</th>
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
                                    <th>program_studi</th>
                                    <th>perguruan_tinggi</th>

                                    @if (auth()->user()->role == 'peserta' || auth()->user()->role == 'superadmin')
                                        <th>Aksi</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peserta as $item)
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="select_item" value="{{ $item->nik }}">
                                        </td>
                                        <td>
                                            <button class="btn btn-status {{ $item->status_pengajuan == 'Belum Diajukan' ? 'btn-secondary' : ($item->status_pengajuan == 'Diajukan' ? 'btn-success' : ($item->status_pengajuan == 'Dibatalkan' ? 'btn-warning' : ($item->status_pengajuan == 'Lulus' ? 'btn-primary' : 'btn-info'))) }}" data-id="{{ $item->nik }}">
                                                {{ $item->status_pengajuan }}
                                            </button>
                                        </td>
                                        <td><a href="{{ route('peserta.create') }}" class="btn btn-success">Ajukan Pencairan</a></td>
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
                                        <td>{{ $item->program_studi }}</td>
                                        <td>{{ $item->perguruan_tinggi }}</td>

                                        @if (auth()->user()->role == 'peserta' || auth()->user()->role == 'superadmin')
                                            <td>
                                                <a href="{{ route('peserta.edit', $item->nik) }}" class="btn btn-primary">Edit</a>
                                                <form action="{{ route('peserta.delete', $item->nik) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
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
        $("#tempatlahir_mhs").select2({
            theme: 'bootstrap4',
            placeholder: "Please Select"
        });

        document.querySelectorAll('.btn-status').forEach(button => {
            button.addEventListener('click', function() {
                var button = this;
                var id = button.getAttribute('data-id');

                fetch(`/peserta/${id}/updateStatus`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    button.classList.remove('btn-secondary', 'btn-success', 'btn-warning', 'btn-primary', 'btn-info');
                    if(data.status == 'Diajukan') button.classList.add('btn-success');
                    else if(data.status == 'Dibatalkan') button.classList.add('btn-warning');
                    else if(data.status == 'Lulus') button.classList.add('btn-primary');
                    else if(data.status == 'Cuti') button.classList.add('btn-info');
                    else button.classList.add('btn-secondary');
                    button.textContent = data.status;
                });
            });
        });

        document.querySelectorAll('.change-status').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var selectedStatus = this.getAttribute('data-status');
                var selected = document.querySelectorAll('.select_item:checked');
                selected.forEach(function(item) {
                    var id = item.value;

                    fetch(`/peserta/${id}/updateStatus`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ status: selectedStatus })
                    })
                    .then(response => response.json())
                    .then(data => {
                        var button = document.querySelector('.btn-status[data-id="'+id+'"]');
                        button.classList.remove('btn-secondary', 'btn-success', 'btn-warning', 'btn-primary', 'btn-info');
                        if(data.status == 'Diajukan') button.classList.add('btn-success');
                        else if(data.status == 'Dibatalkan') button.classList.add('btn-warning');
                        else if(data.status == 'Lulus') button.classList.add('btn-primary');
                        else if(data.status == 'Cuti') button.classList.add('btn-info');
                        else button.classList.add('btn-secondary');
                        button.textContent = data.status;
                    });
                });
            });
        });
    });
</script>
