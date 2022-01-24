
          <div class="row">
                <div class="col-md-8 mb-2">
                    <input type="text"  class="form-control" placeholder="Live Search" wire:model="searchTerm" />
                </div>

                <div class="col-md-4 ">    
                        <a type="button" href="/pendaftaran" class="btn btn-primary justify-content-md-end">Tambah Anggota</a>
                </div>
            </div>

            <table class="table table-responsive-sm table-borderless">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>HP</th>
                    <th>Action</th>
                </tr>
                @foreach($perpustakaan as $p)
                <tr>
                    <td>
                        {{ $p->namalengkap }}
                    </td>
                    <td>
                        {{ $p->email }}      
                    </td>
                    <td>
                        {{ $p->hp }}     
                    </td>

        
                    <td>
                        <a href="/edit/{{$p->id}}" class="btn btn-info btn-sm mb-2">Edit</a>
                        <a href="/dataanggota/{{$p->id}}" class="btn btn-success btn-sm mb-2">Detail</a>
                        <button type="button" wire:click="deleteId({{ $p->id }})" class="btn btn-danger btn-sm mb-2" data-toggle="modal" data-target="#exampleModal">Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>
          
            {{ $perpustakaan->links() }}
        
              

            {{-- modal untuk hapus data --}}
            <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true close-btn">×</span>
                            </button>
                        </div>
                       <div class="modal-body">
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                            <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">Yes, Delete</button>
                        </div>
                    </div>
                </div>
            </div>
         