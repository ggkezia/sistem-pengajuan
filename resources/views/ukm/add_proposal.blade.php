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
                                    <label for="id_kegiatan">Id Kegiatan*</label>
                                    <select class="form-control" id="id_kegiatan">
                                        <option value="">Pilih Id Kegiatan</option>
                                        <option value="2024001">2024001</option>
                                        <option value="2024002">2024002</option>
                                        <option value="2024003">2024003</option>
                                    </select>
                                </div>
                            </div>
                        </div> 
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
                            <input type="text" class="form-control" id="nama_kegiatan" placeholder="Masukkan nama kegiatan" required>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file_proposal">File Proposal*</label>
                                    <input type="file" class="form-control-file" id="file_proposal" name="file_proposal">
                                </div>
                            </div>
                        </div>
                        <div class="form-group pt-4 d-flex justify-content-between">
                            <a class="btn btn-secondary" href="/ukm/proposal" role="button"><i class="bi bi-arrow-left"></i> KEMBALI</a>
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
    $pageTitle = 'TAMBAH PROPOSAL';
@endphp

