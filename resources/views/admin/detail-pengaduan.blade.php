@extends('layouts.app')
@section('title', 'Pengaduan Baru')
@section('content')
@include('komponen.admin.navbar')
@include('komponen.admin.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Detail Pengaduan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-newspaper-o"></i> Pengaduan</a></li>
      <li class="active">Detail Pengaduan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">

            <form action="{{ url('/admin/pengaduan/action_pengaduan') }}" method="post">
              {{csrf_field()}}
              <div class="row">
                <div class="form-group has-feedback col-md-6">
                  <label>Nomber Induk Kependudukan</label>
                  <input type="text" class="form-control" value="{{ $result->nik }}" readonly="">
                  <input type="text" name="id_pengaduan" hidden="" value="{{ $result->id }}">
                </div>
                <div class="form-group has-feedback col-md-6">
                  <label>Tanggal Laporan</label>
                  <input type="text" class="form-control" readonly="" value="{{ $result->created_at }}">
                </div>
              </div>
              <div class="form-group">
                <label>Judul Pengaduan</label>
                <input type="text" class="form-control" readonly="" value="{{ $result->judul_laporan }}">
              </div>           
              <div class="form-group">
                <label>Foto Bukti</label><br>
                <img width="100%" src="{{ url('') }}/jalan_rusak.jpg">
              </div>
              <div class="form-group">
                <label>Isi Pengaduan</label>
                <textarea class="form-control" rows="10" readonly="">{{ $result->isi_laporan }}</textarea>
              </div>
              <div class="form-group">
                <label>Action</label>
                <select class="form-control" name="action" required="">
                  <option>Terima</option>
                  <option>Terima & Tanggapi</option>
                  <option>Tolak</option>
                </select>
              </div>
              <div class="box-footer">
                <button class="btn btn-primary col-md-12">Kirim</button>
              </div>
              
                

                
            </form>
            
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection()