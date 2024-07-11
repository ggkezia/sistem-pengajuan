@extends('layouts.utama')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container-fluid rounded mt-4">
                            <form action="/biro3/updatepengguna/{{ $pengguna -> id_pengguna }}" method="POST" class="pt-2 pb-2">
                                @csrf    
                                <div class="form-group w-25">
                                    <label>Nama Pengguna</label>
                                    <input type="text" name="name" class="form-control" value="{{ $pengguna -> name }}" required >
                                </div>
                                <div class="form-group w-25">
                                    <label>Email Pengguna</label>
                                    <input type="email" name="email" class="form-control" value="{{ $pengguna -> email }}" required>
                                </div>
                                <div class="form-group w-25">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" value="{{ $pengguna -> password }}" required>
                                </div>
                                <div class="form-group w-25">
                                    <label for="role">Role</label>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="Admin" {{ $pengguna->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="WR" {{ $pengguna->role == 'WR' ? 'selected' : '' }}>WR</option>
                                        <option value="BEMU" {{ $pengguna->role == 'BEMU' ? 'selected' : '' }}>BEMU</option>
                                        <option value="UKM" {{ $pengguna->role == 'UKM' ? 'selected' : '' }}>UKM</option>
                                    </select>
                                </div>
                                
                                {{-- <div class="form-group w-25">
                                    <label>Role</label>
                                    <input type="text" name="role" class="form-control" value="{{ $pengguna -> role }}" required >
                                </div> --}}
                                <div class="form-group pt-4">
                                    <input type="submit" value="SIMPAN" class="btn btn-outline-info">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@php
$pageTitle = 'EDIT PENGGUNA';
@endphp