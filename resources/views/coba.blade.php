{{-- Login --}}
<!DOCTYPE html>

<html lang="en">
    <head>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    </head>

    <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</html>

{{-- Sidebar --}}
{{-- <div class="wrapper"> --}}
    <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
      <!-- Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
          Tip 2: you can also add an image using data-image tag-->
          <div class="sidebar-wrapper">
          <div class="logo">
            <a class="simple-text">
                UKM
            </a>
          </div>
          <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>HOME</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('kegiatan') }}">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>PENGAJUAN KEGIATAN</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('proposal') }}">
                    <i class="nc-icon nc-notes"></i>
                    <p>PENGAJUAN PROPOSAL</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('lpj') }}">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>LPJ</p>
                </a>
            </li>
            {{-- <li class="nav-item active active-pro">
                <a class="nav-link active" href="upgrade.html">
                    <i class="nc-icon nc-alien-33"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> --}}
          </ul>
    </div>
    </div>

{{-- kegiatan --}}
@extends('utama')
@section('content')
<div class="content">
    <div class="container-fluid">
        <a name="" id="" class=" btn btn-info" href="" role="button"><i class="bi bi-plus-square-fill"></i> ADD KEGIATAN</a>
        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/dosen/cari">
            <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Status</th>
                        <th scope="col">Jabatan Fungsional</th>
                        <th scope="col">Pakar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
            <tbody>
            {{-- @foreach ($dosen as $id => $d)
                <tr>
                    <th scope="row">{{ $dosen -> firstItem() + $id}}</th>
                    <td>{{ $d -> nidn }}</td>
                    <td>{{ $d -> nama }}</td>
                    <td>{{ $d -> status }}</td> 
                    <td>{{ $d -> jafung }}</td>
                    <td>{{ $d -> pakar }}</td>
                    <td>
                        <a href="/dosen/edit/{{ $d -> id}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i> EDIT</a>
                        <a href="/user/delete/{{ $d -> id}}" onclick= "return confirm('Yakin Hapus?')" class="btn btn-outline-danger"><i class="bi bi-x-square"></i> DELETE</a>
                    </td>
                </tr>
            @endforeach                 --}}
            </tbody>
            </table>
                {{-- <span class="float-right"> {{ $dosen ->links()}}</span> --}}
        </div>
    </div>
</div>
@endsection
@php
    $pageTitle = 'PENGAJUAN KEGIATAN';
@endphp