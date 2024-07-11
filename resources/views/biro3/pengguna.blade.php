@extends('layouts.utama')

@section('content')
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close bi bi-x" data-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <a name="" id="" class=" btn btn-info" href="/biro3/tambahpengguna" role="button"><i class="bi bi-plus-square-fill"></i> Tambah Pengguna</a>
                            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/biro3/caripengguna">
                                <div class="form-group mr-2">
                                    <label for="filter">Filter:</label>
                                    <select class="form-control" id="filter" name="filter">
                                        <option value="">None</option>
                                        <option value="name" {{ request('filter') == 'name' ? 'selected' : '' }}>NAMA PENGGUNA</option>
                                        <option value="email" {{ request('filter') == 'email' ? 'selected' : '' }}>EMAIL</option>
                                        <option value="role" {{ request('filter') == 'role' ? 'selected' : '' }}>ROLE</option>
                                    </select>
                                </div>
                                <div class="form-group mr-2">
                                    <input class="form-control @error('keyword') is-invalid @enderror" name="keyword" type="text" placeholder="Keyword">
                                    @error('keyword')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Filter</button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('alert'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('alert')}}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif       
                        <div class="table-responsive">
                            {{-- <form method="GET" action="{{ route('biro3.pengguna') }}" class="form-inline mb-3">
                                <label for="perPage" class="mr-2">Tampilkan</label>
                                <select name="per_page" id="perPage" class="form-control mr-2" onchange="this.form.submit()">
                                    <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                                    <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                                    <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                                    <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                                </select>
                            </form> --}}
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">NAMA PENGGUNA</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">PASSWORD</th>
                                        <th scope="col">ROLE</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengguna as $id_pengguna => $u)
                                    <tr>
                                        <th scope="row">{{ $pengguna->firstItem() + $id_pengguna}}</th>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ substr($u->password, 0, 5) }}...</td> <!-- Menampilkan 5 karakter pertama -->
                                        {{-- <td>{{ $u->password }}</td> --}}
                                        <td>{{ $u->role }}</td>
                                        <td>
                                            <a href="/biro3/editpengguna/{{ $u->id_pengguna}}" class="btn btn-success mr-2"><i class="bi bi-pencil-square"></i></a>
                                            <a href="/biro3/hapuspengguna/{{ $u->id_pengguna}}" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"><i class="bi bi-x-square"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $pengguna->links() }}
                            {{-- {{ $pengguna->appends(['per_page' => $perPage, 'filter' => request('filter'), 'keyword' => request('keyword')])->links() }} --}}
                            {{-- {{ $pengguna->appends(['per_page' => $perPage])->links() }} --}}
                            {{-- {{ $pengguna->onEachSide(1)->render('pagination::bootstrap-4') }} --}}
                            {{-- <span class="float-right" >{{ $pengguna->links()}} </span>       --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@php
$pageTitle = 'DAFTAR PENGGUNA';
@endphp