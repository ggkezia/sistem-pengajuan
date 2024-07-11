@extends('layouts.utama')
@section('content')
<div class="content">
    <div class="container-fluid">
       <div class="row" style="min-height: 200px;">
           <div class="col-md-12 d-flex align-items-end">
               <div class="card w-100">
                   <div class="card-body d-flex flex-column justify-content-center">
                       <h4 class="card-title text-center mb-5">Pengumuman</h4>
                       <p class="card-text">Berikut panduan pengajuan proposal:</p>
                       <p class="card-text">1. 4 minggu sebelum proker > masuk ke BEMU, revisi oleh BEMU selama 3-5 hari kerja</p>
                       <p class="card-text">2. 2-3 minggu sebelum proker > selesai direvisi oleh BEMU, masuk dan diterima oleh BIRO III, tebusan ke rektorat</p>
                       <p class="card-text">3. 1 minggu sebelum proker > uang turun</p>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
@endsection
@php
    $pageTitle = 'HOME';
@endphp