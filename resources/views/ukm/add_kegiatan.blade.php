@extends('layouts.utama')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_pengguna">Id Pengguna*</label>
                                    <input type="text" class="form-control" id="id_pengguna" disabled="" placeholder="id_pengguna" value="1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Pengguna*</label>
                                    <input type="text" class="form-control" id="name" disabled="" placeholder="name" value="Duta Voice">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_kegiatan">Nama Kegiatan*</label>
                            <input type="text" class="form-control" id="nama_kegiatan" placeholder="Masukkan nama kegiatan">
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
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="anggaran">Anggaran*</label>
                                    <input type="text" class="form-control" id="anggaran" placeholder="Masukkan anggaran">
                                </div>
                            </div>
                        </div>
                        <div class="form-group pt-4 d-flex justify-content-between">
                        {{-- <div class="form-group pt-4 text-center">         --}}
                            <a class="btn btn-secondary" href="/ukm/kegiatan" role="button"><i class="bi bi-arrow-left"></i> KEMBALI</a>
                            <a class="btn btn-warning" href="simpan" role="button"><i class="bi bi-save"></i> SIMPAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@php
    $pageTitle = 'TAMBAH KEGIATAN';
@endphp

