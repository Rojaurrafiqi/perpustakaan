@extends('layouts.dasar')

@section('title', 'Data Anggota')

@section('content')

  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12">
           @livewire('dataanggota')
        </div>
      </div>
          
    </div>
  </div>
@endsection
    
