@extends('layouts.dasar')

@section('title', 'Pendaftaran Anggota')

@section('content')
  <div class="card">
    <div class="card-body">
     <h5> Pendaftaran Anggota Baru </h5>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
           @livewire('pendaftaran')
        </div>
      </div>
          
    </div>
  </div>
@endsection
    
