<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Masyarakat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('admin/post_add_masyarakat') }}">
          {{csrf_field()}}
          <div class="form-group">
            <label>Nomber Induk Kependudukan</label>
            <input type="text" name="nik" required="" class="form-control" placeholder="Masukan NIK">
          </div>

          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="display_name" required="" class="form-control" placeholder="Masukan Nama Lengkap">
          </div>

          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required="" class="form-control" placeholder="Masukan Username">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required="" class="form-control" placeholder="*****">
          </div>

          <div class="form-group">
            <label>Nomber Telepon</label>
            <input type="text" name="tlp" required="" class="form-control" placeholder="Masukan Nomber Telepon">
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Tambah Modal -->

<!-- Modal Edit -->
@foreach($result as $row)
<div class="modal fade" id="modalEdit{{ $row->nik }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ url('admin/post_edit_masyarakat/') }}">
          {{csrf_field()}}

          <div class="form-group">
            <label>Nomber Induk Kependudukan</label>
            <input type="text" name="nik" required="" class="form-control" placeholder="Masukan Username" value="{{$row->nik}}" readonly="">
          </div>

          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="hidden" name="nik" value="{{$row->nik}}">
            <input type="text" name="display_name" required="" class="form-control" placeholder="Masukan Nama Lengkap" value="{{$row->display_name}}">
          </div>

          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required="" class="form-control" placeholder="Masukan Username" value="{{$row->username}}">
          </div>

          <div class="form-group">
            <label>Nomber Telepon</label>
            <input type="text" name="tlp" required="" class="form-control" placeholder="Masukan Nomber Telepon" value="{{$row->tlp}}">
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
<!-- End Edit Modal -->

<!-- Modal Hapus -->
@foreach($result as $row)
<div class="modal fade" id="modalHapus{{ $row->nik }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <p>Apakah anda yakin akan menghapus {{ $row->display_name }}?</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="{{ url('admin/delete_masyarakat/'.$row->nik) }}" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- End Hapus Modal -->