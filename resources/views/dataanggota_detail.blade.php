@extends('layouts.dasar')

@section('title', 'Data Anggota')

@section('content')

  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
            @foreach ($perpustakaan as $p)
            <div class="row">
                <div class="col-md-10">
                    <h5 class="mb-2"> Data {{$p->namalengkap}} Lengkap</h5>
                </div>
                <div class="col-md-2">
                    <a href="/edit/{{$p->id}}" class="btn btn-outline-light justify-content-sm-end mb-2">Edit</a>
                   
                </div>
            </div>
                <table>
                    <tr style="margin-bottom: 10px;">
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>{{$p->namalengkap}}</td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <td>Nomor {{$p->ktp_ktas}}</td>
                        <td>:</td>
                        <td>{{$p->nomor_ktp_ktas}}</td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <td>Email</td>
                        <td>:</td>
                        <td>{{$p->email}}</td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <td>Nomor HP</td>
                        <td>:</td>
                        <td>{{$p->hp}}</td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <td>TTL</td>
                        <td>:</td>
                        <td>{{$p->tempat_lahir}} / {{$p->tanggal_lahir}}</td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <td>Alamat Rumah</td>
                        <td>:</td>
                        <td>{{$p->alamat_rumah}}</td>
                    </tr>
                    
                    <tr style="margin-bottom: 10px;">
                        <td>Nama Instansi</td>
                        <td>:</td>
                        <td>{{$p->nama_instansi}}</td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <td>Telepon Instansi</td>
                        <td>:</td>
                        <td>{{$p->telpon_instansi}}</td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <td>Alamat Instansi</td>
                        <td>:</td>
                        <td>{{$p->alamat_instansi}}</td>
                    </tr>
                
                    <tr style="margin-bottom: 10px;">
                        <td>Pendidikan Terakhir</td>
                        <td>:</td>
                        <td>{{$p->pendidikan_terakhir}}</td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{$p->pekerjaan}}</td>
                    </tr>
            
                    <tr style="margin-bottom: 10px;">
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{$p->kelamin}}</td>
                    </tr>
                    <tr style="margin-bottom: 10px;">
                        <td>Status Perkawinan</td>
                        <td>:</td>
                        <td>{{$p->status_perkawinan}}</td>
                    </tr>
                
               
                </table>
           @endforeach
        </div>
      </div>
          
    </div>
  </div>
@endsection
    
