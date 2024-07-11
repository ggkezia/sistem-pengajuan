@extends('layouts.utama')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <a class="btn btn-info" href="/ukm/add_lpj" role="button"><i class="bi bi-plus-square-fill"></i> Tambah LPJ</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID LPJ
                                    </th>
                                    <th>
                                        ID Proposal
                                    </th>
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
                                        Total Pengeluaran
                                    </th>
                                    <th>
                                        File LPJ
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
                                            LPJ2024001
                                        </td>
                                        <td>
                                            PR2024001
                                        </td>
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
                                            08123456789
                                        </td>
                                        <td>
                                            Rp 1.500.000
                                        </td>
                                        <td>
                                            <a href="/ukm/editrevisi" class="btn btn-success mr-2"><i class="bi bi-pencil-square"></i></a>
                                        </td>
                                        <td>
                                            Disetujui
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
    $pageTitle = 'LPJ';
@endphp