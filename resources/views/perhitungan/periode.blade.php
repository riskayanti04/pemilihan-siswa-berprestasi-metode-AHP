@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">PILIH PERIODE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Pilih Periode</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="m-0 text-dark"><strong>Pilih Periode</strong></h3>
        </div>
        <div class="card-body">
            <div class="btn-group mb-2" role="group" aria-label="Periode">
                {{-- Contoh periode, bisa di-generate dari controller atau loop --}}
                @foreach ($periodes as $periode)
                    <a href="/hasil/{{$jurusan}}/{{$kelas}}/{{$periode}}" class="btn btn-secondary btn-lg" style="margin: 5px; ">
                        {{ \Carbon\Carbon::createFromFormat('Y-m', $periode)->translatedFormat('F Y') }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('includes.script')
@endsection
