@extends('layouts.app')

@section('title', 'Ajukan Pencairan')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Ajukan Pencairan</h1>
        </div>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kategori_mahasiswa_penerima" class="mb-1">Kategori Mahasiswa Penerima<span class="text-danger">*</span></label>
                <div>
                    <input type="radio" name="kategori_mahasiswa_penerima" value="Penerima Baru"  class="me-1" required> Penerima Baru
                    <input type="radio" name="kategori_mahasiswa_penerima" value="Penerima Ongoing" class="ms-3 me-1" required> Penerima Ongoing
                </div>
            </div>
            <div class="form-group">
                <label for="bank_penyalur" class="mb-1">Bank Penyalur<span class="text-danger">*</span></label>
                <select name="bank_penyalur" id="bank_penyalur" class="form-control" required>
                    <option value="">- Pilih Bank Penyalur -</option>
                    <!-- Add options here -->
                </select>
            </div>
            <div class="form-group">
                <label for="perguruan_tinggi" class="mb-1">Perguruan Tinggi<span class="text-danger">*</span></label>
                <select name="perguruan_tinggi" id="perguruan_tinggi" class="form-control" required>
                    <option value="">Pilih perguruan tinggi</option>
                    <!-- Add options here -->
                </select>
            </div>
            <div class="form-group">
                <label for="no_sk_surat_Ajukan" class="mb-1">No. SK/Surat Ajukan<span class="text-danger">*</span></label>
                <input type="text" name="no_sk_surat_Ajukan" id="no_sk_surat_Ajukan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_surat" class="mb-1">Tanggal Surat<span class="text-danger">*</span></label>
                <input type="date" name="tanggal_surat" id="tanggal_surat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="keterangan_tambahan" class="mb-1">Keterangan Tambahan</label>
                <textarea name="keterangan_tambahan" id="keterangan_tambahan" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="scan_surat_Ajukan_jpg" class="mb-1">Scan Surat Ajukan (JPG, opsional)</label>
                <input type="file" name="scan_surat_Ajukan_jpg" id="scan_surat_Ajukan_jpg" class="form-control" accept=".jpg,.jpeg,.png">
            </div>
            <div class="form-group">
                <label for="scan_surat_Ajukan_pdf" class="mb-1">Scan Surat Ajukan (PDF, wajib)<span class="text-danger">*</span></label>
                <input type="file" name="scan_surat_Ajukan_pdf" id="scan_surat_Ajukan_pdf" class="form-control" accept=".pdf" required>
            </div>
            <div class="form-group">
                <label for="nama_bank_pt" class="mb-1">Nama Bank PT<span class="text-danger">*</span></label>
                <select name="nama_bank_pt" id="nama_bank_pt" class="form-control" required>
                    <option value="">- Pilih Bank -</option>
                    <!-- Add options here -->
                </select>
            </div>
            <div class="form-group">
                <label for="no_rekening_pt" class="mb-1">No. Rekening PT<span class="text-danger">*</span></label>
                <input type="text" name="no_rekening_pt" id="no_rekening_pt" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rekening_pt_atas_nama" class="mb-1">Rekening PT Atas Nama<span class="text-danger">*</span></label>
                <input type="text" name="rekening_pt_atas_nama" id="rekening_pt_atas_nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="scan_sptjm_pdf" class="mb-1">Scan SPTJM (Surat Pernyataan Tanggung Jawab Mutlak) (PDF, wajib)<span class="text-danger">*</span></label>
                <input type="file" name="scan_sptjm_pdf" id="scan_sptjm_pdf" class="form-control" accept=".pdf" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary me-1">Simpan Ajukan</button>
                <button type="button" class="btn btn-secondary" onclick="history.back();">Kembali</button>
            </div>
        </form>
    </section>
</div>
@endsection
