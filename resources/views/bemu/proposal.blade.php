@extends('layouts.utama')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKegiatanModal">Tambah</button>
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
                                        Nama Kegiatan
                                    </th>
                                    <th>
                                        Penanggung Jawab
                                    </th>
                                    <th>
                                        Tanggal Mulai
                                    </th>
                                    <th>
                                        Tanggal Selesai
                                    </th>
                                    <th>
                                        Target
                                    </th>
                                    <th>
                                        Anggaran
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
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
                                            2024-03-01
                                        </td>
                                        <td>
                                            2024-03-05
                                        </td>
                                        <td>
                                            20 orang
                                        </td>
                                        <td>
                                            Rp 1.000.000
                                        </td>
                                        <td>
                                            Disetujui
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris-baris tabel sesuai dengan data kegiatan -->
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
    $pageTitle = 'DAFTAR PROPOSAL';
@endphp

