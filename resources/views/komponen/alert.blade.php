@if ($alert == 'add_sukses')
    <div class="alert alert-success" role="alert">
        Data Berhasil Ditambahkan
    </div>
@endif

@if ($alert == 'add_gagal')
    <div class="alert alert-danger" role="alert">
        Data Gagal Ditambahkan
    </div>
@endif

@if ($alert == 'edit_sukses')
    <div class="alert alert-success" role="alert">
        Data Berhasil Diubah
    </div>
@endif

@if ($alert == 'edit_gagal')
    <div class="alert alert-danger" role="alert">
        Data Gagal Diubah
    </div>
@endif

@if ($alert == 'delete_sukses')
    <div class="alert alert-success" role="alert">
        Data Berhasil Dihapus
    </div>
@endif

@if ($alert == 'delete_gagal')
    <div class="alert alert-danger" role="alert">
        Data Gagal Dihapus
    </div>
@endif

@if ($alert == 'regist_sukses')
    <div class="alert alert-success" role="alert">
        Registrasi Berhasil
    </div>
@endif
@if ($alert == 'login_sukses')
    <div class="alert alert-success" role="alert">
        Login Berhasil
    </div>
@endif
