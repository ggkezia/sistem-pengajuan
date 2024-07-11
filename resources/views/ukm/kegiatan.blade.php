@extends('layouts.utama')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-info" href="/ukm/add_kegiatan" role="button"><i class="bi bi-plus-square-fill"></i> Tambah Kegiatan</a>
                            {{-- <button role="button" class="btn btn-info" href="/ukm/add_kegiatan">Tambah</button> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID Kegiatan
                                    </th>
                                    <th>
                                        ID Pengguna
                                    </th>
                                    <th>
                                        Nama Kegiatan
                                    </th>
                                    <th>
                                        Penanggung Jawab
                                    </th> 
                                    <th>
                                        Kontak
                                    </th> 
                                    <th>
                                        Anggaran
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            2024001
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Pelatihan Kewirausahaan
                                        </td>
                                        <td>
                                            Sinta
                                        </td>
                                        <td>
                                            081234567890
                                        </td>
                                        <td>
                                            Rp 1.000.000
                                        </td>
                                        <td>
                                            Disetujui
                                        </td>
                                        <td>
                                            edit, delete
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2024002
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Webinar
                                        </td>
                                        <td>
                                            Doni
                                        </td>
                                        <td>
                                            081222222222
                                        </td>
                                        <td>
                                            Rp 2.000.000
                                        </td>
                                        <td>
                                            Ditolak
                                        </td>
                                        <td>
                                            edit, delete
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2024003
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Webinar
                                        </td>
                                        <td>
                                            Rasya
                                        </td>
                                        <td>
                                            081333333333
                                        </td>
                                        <td>
                                            Rp 2.000.000
                                        </td>
                                        <td>
                                            Perlu revisi
                                        </td>
                                        <td>
                                            <a href="/ukm/editrevisi" class="btn btn-success mr-2"><i class="bi bi-pencil-square"></i></a>
                                            <a href="/ukm/hapusrevisi" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"><i class="bi bi-x-square"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2024004
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            Lomba
                                        </td>
                                        <td>
                                            Dita
                                        </td>
                                        <td>
                                            081444444444
                                        </td>
                                        <td>
                                            Rp 3.500.000
                                        </td>
                                        <td>
                                            Menunggu Persetujuan
                                        </td>
                                        <td>
                                            <a href="/ukm/editrevisi" class="btn btn-success mr-2"><i class="bi bi-pencil-square"></i></a>
                                            <a href="/ukm/hapusrevisi" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"><i class="bi bi-x-square"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@php
    $pageTitle = 'PENGAJUAN KEGIATAN';
@endphp

