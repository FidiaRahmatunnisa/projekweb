
@extends('home')
@section('title',$movie['judul'])
@section('container')

{{-- <div class="row row-mt-3"> --}}
    {{-- @foreach ($movie as $mov) --}}
    {{-- <div class="col-lg-4"> --}}
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-3">
                <img src="/images/{{$movie['foto_sampul']}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <h1 class="card-title">{{$movie['judul']}}</h1>
                  <p class="card-text">{{$movie['sinopsis']}}</p>
                  <p class="card-text">Tahun  : {{$movie['tahun']}}</p>
                  <p class="card-text">Pemain : {{implode(',', $movie['pemain'])}}</p>
                  <a href="/" class="btn btn-success">kembali</a>
                </div>
              </div>
            </div>
        </div>
    {{-- </div> --}}
    {{-- @endforeach --}}
{{-- </div> --}}

@endsection




