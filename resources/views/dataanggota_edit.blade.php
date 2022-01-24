@extends('layouts.dasar')

@section('title', 'Data Anggota')

@section('content')
  <div class="card">
    <div class="card-body">
     <h5> Edit Data </h5>
    </div>
  </div>


  
  
  @foreach ($perpustakaan as $p)
  
  
  
  <div class="card">
      <div class="card-body">
          <div class="row">
              <div class="col-md-12">  
                  <form action="{{route('anggota_edit_store')}}" method="post">
                    {{ csrf_field() }}
                    
                    <input type="hidden" value="{{$p->id}}" name="id">
                
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label" for="default-06">KTP or KTAS</label>
                        <div class="form-control-wrap ">
                            <div class="form-control-select">
                                <select class="form-control" name="ktp_ktas">
                                    <option value="KTP" {{ $p->ktp_ktas == "KTP" ? 'selected' : '' }}>KTP</option>
                                    <option value="KTAS" {{ $p->ktp_ktas == "KTAS" ? 'selected' : '' }}>KTAS</option>
                                </select>
                                @error('ktp_ktas') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label  class="form-label">Nomor</label>
                    <input type="number" name="nomor_ktp_ktas" value="{{$p->nomor_ktp_ktas}}" class="form-control">
                    @error('nomor_ktp_ktas') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="mb-3">
                <label  class="form-label">Nama Lengkap</label>
                <input type="text" name="namalengkap" value="{{$p->namalengkap}}" class="form-control">
                @error('namalengkap') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="row mb-3">
                <div class="col-md-4">
                    <label  class="form-label">Tempat Lahir</label>
                    <input type="text"name="tempat_lahir" value="{{$p->tempat_lahir}}"  class="form-control" >
                    @error('tempat_lahir') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-8">
                    <label  class="form-label">Tanggal</label>
                    <input type="date" name="tanggal_lahir" value="{{$p->tanggal_lahir}}" class="form-control">
                    @error('tanggal_lahir') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                </div>
            
                <div class="mb-3">
                    <label  class="form-label">Email address</label>
                    <input type="email" name="email" value="{{$p->email}}" class="form-control">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" value="{{$p->password}}" class="form-control">
                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label  class="form-label">Alamat</label>
                    <textarea type="text" name="alamat_rumah" value="" class="form-control">{{$p->alamat_rumah}}</textarea>
                    @error('alamat_rumah') <span class="text-danger">{{ $message }}</span> @enderror
                </div>


                <div class="mb-3">
                    <label  class="form-label">HP</label>
                    <input type="text" name="hp" value="{{$p->hp}}"  class="form-control" >
                    @error('hp') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Instansi Asal</label>
                        <input type="text" name="nama_instansi" value="{{$p->nama_instansi}}" class="form-control" >
                        @error('nama_instansi') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                    <div class="col-md-6">
                    <label  class="form-label">Telpon Instansi</label>
                    <input type="number" name="telpon_instansi" value="{{$p->telpon_instansi}}"  class="form-control" >
                    </div>
                </div>
                
                <div class="mb-3">
                    <label  class="form-label">Alamat Instansi</label>
                    <textarea type="text" name="alamat_instansi" value=""  class="form-control" >{{$p->alamat_instansi}}</textarea>
                    @error('alamat_instansi') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Status Perkawinan</label>
                        <div class="form-control-select">
                        <select class="form-control" name="status_perkawinan" >
                            <option value="BelumMenikah" {{ $p->status_perkawinan == "BelumMenikah" ? 'selected' : '' }}>Belum Menikah</option>
                            <option value="Menikah" {{ $p->status_perkawinan == "Menikah" ? 'selected' : '' }}>Menikah</option>
                            <option value="Bercerai" {{ $p->status_perkawinan == "Bercerai" ? 'selected' : '' }}>Bercerai</option>
                        </select>
                        @error('status_perkawinan') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    </div>
                
                    <div class="col-md-6">
                    <label  class="form-label">Jenis Kelamin</label>
                    <div class="form-control-select">
                        <select class="form-control" name="kelamin"  >
                        <option value="Pria" {{ $p->kelamin == "Pria" ? 'selected' : '' }}>Pria</option>
                        <option value="Wanita" {{ $p->kelamin == "Wanita" ? 'selected' : '' }}>Wanita</option>
                        </select>
                        @error('kelamin') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Pendidikan Terakhir</label>
                        <div class="form-control-select">
                        <select class="form-control" name="pendidikan_terakhir">
                            <option value="SD" {{ $p->pendidikan_terakhir == "SD" ? 'selected' : '' }}>SD</option>
                            <option value="SMP" {{ $p->pendidikan_terakhir == "SMP" ? 'selected' : '' }}>SMP</option>
                            <option value="SMA" {{ $p->pendidikan_terakhir == "SMA" ? 'selected' : '' }}>SMA</option>
                            <option value="D1" {{ $p->pendidikan_terakhir == "D1" ? 'selected' : '' }}>D1</option>
                            <option value="D2" {{ $p->pendidikan_terakhir == "D2" ? 'selected' : '' }}>D2</option>
                            <option value="D3" {{ $p->pendidikan_terakhir == "D3" ? 'selected' : '' }}>D3</option>
                            <option value="S1/D4" {{ $p->pendidikan_terakhir == "S1/D4" ? 'selected' : '' }}>S1/D4</option>
                            <option value="S2" {{ $p->pendidikan_terakhir == "S2" ? 'selected' : '' }}>S2</option>
                            <option value="S3" {{ $p->pendidikan_terakhir == "S3" ? 'selected' : '' }}>S3</option>
                        </select>
                        @error('pendidikan_terakhir') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <label  class="form-label">Pekerjaan</label>
                    <div class="form-control-select">
                        <select class="form-control" name="pekerjaan" >
                        <option value="PNS" {{ $p->pekerjaan == "PNS" ? 'selected' : '' }}>PNS</option>
                        <option value="TNI/POLRI" {{ $p->pekerjaan == "TNI/POLRI" ? 'selected' : '' }}>TNI/POLRI</option>
                        <option value="Mahasiswa" {{ $p->pekerjaan == "Mahasiswa" ? 'selected' : '' }}>Mahasiswa</option>
                        <option value="Wiraswasta" {{ $p->pekerjaan == "Wiraswasta" ? 'selected' : '' }}>Wiraswasta</option>
                        <option value="Lainya" {{ $p->pekerjaan == "Lainya" ? 'selected' : '' }}>Lainya</option>
                        </select>
                        @error('pekerjaan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    </div>
                </div>

                <a href="/dataanggota" class="btn btn-warning">Kembali</a> 
                <button type="submit" class="btn btn-success">Submit</button>
                
            </form>
        </div>
      </div>
@endforeach
    </div>
  </div>
@endsection
    
