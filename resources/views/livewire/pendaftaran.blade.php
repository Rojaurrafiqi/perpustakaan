<div>
        <form wire:submit.prevent="submit">
        <div class="row">
              <div class="col-md-4">
                <div class="mb-3">
                  <div class="form-group">
                    <label class="form-label" for="default-06">KTP or KTAS</label>
                      <div class="form-control-wrap ">
                         <div class="form-control-select">
                            <select class="form-control"  wire:model="ktp_ktas">
                              <option>-- Pilih Tanda Pengenal --</option>
                              <option value="KTP">KTP</option>
                              <option value="KTAS">KTAS</option>
                            </select>
                            @error('ktp_ktas') <span class="text-danger">{{ $message }}</span> @enderror
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 mb-3">
                  <label  class="form-label">Nomor</label>
                  <input type="number" class="form-control" wire:model="nomor_ktp_ktas">
                  @error('nomor_ktp_ktas') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="mb-3">
              <label  class="form-label">Nama Lengkap</label>
              <input type="text" wire:model="namalengkap" class="form-control">
              @error('namalengkap') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label  class="form-label">Tempat Lahir</label>
                <input type="text" wire:model="tempat_lahir" class="form-control" >
                @error('tempat_lahir') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
              <div class="col-md-8">
                <label  class="form-label">Tanggal</label>
                <input type="date" wire:model="tanggal_lahir" class="form-control">
                @error('tanggal_lahir') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            </div>
         
              <div class="mb-3">
                <label  class="form-label">Email address</label>
                <input type="email" wire:model="email" class="form-control">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" wire:model="password" class="form-control">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
              </div>

              <div class="mb-3">
                <label  class="form-label">Alamat</label>
                <textarea type="text" wire:model="alamat_rumah" class="form-control"></textarea>
                 @error('alamat_rumah') <span class="text-danger">{{ $message }}</span> @enderror
            </div>


              <div class="mb-3">
                <label  class="form-label">HP</label>
                <input type="text" wire:model="hp" class="form-control" >
                @error('hp') <span class="text-danger">{{ $message }}</span> @enderror
              </div>
              
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label  class="form-label">Instansi Asal</label>
                    <input type="text" wire:model="nama_instansi" class="form-control" >
                    @error('nama_instansi') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                </div>
                <div class="col-md-6">
                  <label  class="form-label">Telpon Instansi</label>
                  <input type="number" wire:model="telpon_instansi" class="form-control" >
                  @error('telpon_instansi') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
              </div>
              
              <div class="mb-3">
                <label  class="form-label">Alamat Instansi</label>
                <textarea type="text" wire:model="alamat_instansi" class="form-control" ></textarea>
                @error('alamat_instansi') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
              
              
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label  class="form-label">Status Perkawinan</label>
                    <div class="form-control-select">
                      <select class="form-control" wire:model="status_perkawinan" >
                        <option value="">--Pilih Status Perkawinan--</option>
                        <option value="BelumMenikah">Belum Menikah</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Bercerai">Bercerai</option>
                      </select>
                      @error('status_perkawinan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label  class="form-label">Jenis Kelamin</label>
                  <div class="form-control-select">
                    <select class="form-control" wire:model="kelamin" >
                      <option value="">-- Pilih Jenis Kelamin --</option>
                      <option value="Pria">Pria</option>
                      <option value="Wanita">Wanita</option>
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
                      <select class="form-control" wire:model="pendidikan_terakhir">
                        <option value="">-- Pilih pendidikan --</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1/D4">S1/D4</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                      </select>
                      @error('pendidikan_terakhir') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label  class="form-label">Pekerjaan</label>
                  <div class="form-control-select">
                    <select class="form-control" wire:model="pekerjaan">
                      <option value="">-- Pilih Pekerjaan --</option>
                      <option value="PNS">PNS</option>
                      <option value="TNI/POLRI">TNI/POLRI</option>
                      <option value="Mahasiswa">Mahasiswa</option>
                      <option value="Wiraswasta">Wiraswasta</option>
                      <option value="Lainya">Lainya</option>
                    </select>
                    @error('pekerjaan') <span class="text-danger">{{ $message }}</span> @enderror
                  </div>
                </div>
              </div>


              <button type="submit" class="btn btn-success">Submit</button>
             
              
            </form>
</div>
 