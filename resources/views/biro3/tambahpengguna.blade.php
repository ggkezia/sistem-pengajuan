@extends('layouts.utama')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <div class="container-fluid rounded mt-4"> --}}
                            <form action="/biro3/simpanpengguna" method="POST" class="pt-2 pb-2">
                                @csrf    
                                <div class="form-group w-25">
                                    <label>Nama Pengguna</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" required >
                                </div>
                                <div class="form-group w-25">
                                    <label>Email Pengguna</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email" required>
                                </div>
                                <div class="form-group w-25">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                                </div>
                                <div class="form-group w-25">
                                    <label>Role</label>
                                    <select name="role" class="form-control" required>
                                        <option value="">Pilih Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="WR">WR</option>
                                        <option value="BEMU">BEMU</option>
                                        <option value="UKM">UKM</option>
                                    </select>
                                </div>
                                
                                {{-- <div class="form-group w-25">
                                    <label>Role</label>
                                    <input type="text" name="role" class="form-control" placeholder="Masukkan Role" required >
                                </div> --}}
                                <div class="form-group pt-4">
                                    <input type="submit" value="SIMPAN" class="btn btn-outline-info">
                                </div>
                            </form>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@php
$pageTitle = 'TAMBAH PENGGUNA';
@endphp