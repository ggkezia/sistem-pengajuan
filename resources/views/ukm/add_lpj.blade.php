@extends('layouts.utama')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan*</label>
                    <input type="text" class="form-control" id="nama_kegiatan" placeholder="Masukkan nama kegiatan" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tanggal">Tanggal Pelaksanaan*</label>
                    <input type="date" class="form-control" id="tanggal">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="penanggung_jawab">Penanggung Jawab*</label>
                    <input type="text" class="form-control" id="penanggung_jawab" placeholder="Masukkan penanggung jawab">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="kontak">Kontak*</label>
                    <input type="text" class="form-control" id="kontak" placeholder="Masukkan kontak">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="target">Target*</label>
                    <input type="text" class="form-control" id="target" placeholder="Masukkan target">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="anggaran">Anggaran*</label>
                    <input type="text" class="form-control" id="anggaran" placeholder="Masukkan anggaran">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="total_pengeluaran">Total Pengeluaran*</label>
                    <input type="text" class="form-control" id="total_pengeluaran" placeholder="Masukkan total pengeluaran">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="file_lpj">File LPJ*</label>
                    <input type="file" class="form-control-file" id="file_lpj" name="file_lpj">
                </div>
            </div>
        </div>
        <div class="row mt-3"> {{-- margin-top sebesar 3 atau 4 satuan (biasanya dalam pixel) untuk menambahkan jarak vertikal yang lebih besar. --}}
            <div class="col-md-12 text-center">        
                {{-- <input type="submit" value="SIMPAN" class="btn btn-outline-primary">      --}}
                <a class="btn btn-danger" href="simpan" role="button"><i class="bi bi-plus-square-fill"></i> Simpan</a>
            </div>
        </div>
    </div>
</div>
@endsection
@php
    $pageTitle = 'TAMBAH LPJ';
@endphp

