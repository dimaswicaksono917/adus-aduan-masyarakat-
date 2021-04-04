@extends('layouts.app')
@section('title', 'Detail Tanggapan')
@section('content')
@include('komponen.masyarakat.navbar')
@include('komponen.masyarakat.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Detail Tanggapan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-newspaper-o"></i> Pengaduan</a></li>
      <li class="active">Tanggapan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">

      <!-- Form Pengaduan -->
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-header">
            <h3>Data Pengaduan</h3>
          </div>
          <div class="box-body">

            <form action="{{ url('/masyarakat/pengaduan/action_pengaduan') }}" method="post">
              {{csrf_field()}}
              <div class="row">
                <div class="form-group has-feedback col-md-6">
                  <label>Nomber Induk Kependudukan</label>
                  <input type="text" class="form-control" value="{{ $data_pengaduan->nik }}" readonly="">
                  <input type="text" name="id_pengaduan" hidden="" value="{{ $data_pengaduan->id }}">
                </div>
                <div class="form-group has-feedback col-md-6">
                  <label>Tanggal Laporan</label>
                  <input type="text" class="form-control" readonly="" value="{{ $data_pengaduan->created_at }}">
                </div>
              </div>
              <div class="form-group">
                <label>Judul Pengaduan</label>
                <input type="text" class="form-control" readonly="" value="{{ $data_pengaduan->judul_laporan }}">
              </div>           
              <div class="form-group">
                <label>Foto Bukti</label><br>
                <img width="100%" src="{{ url('') }}/jalan_rusak.jpg">
              </div>
              <div class="form-group">
                <label>Isi Pengaduan</label>
                <textarea class="form-control" rows="10" readonly="">{{ $data_pengaduan->isi_laporan }}</textarea>
              </div>
            </form>
            
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

      <!-- Form Tanggapan -->
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-header">
            <h3>Tanggapan Admin</h3>
          </div>
          <div class="box-body">

            <form action="{{ url('/masyarakat/pengaduan/posttanggapan') }}" method="post">
              {{csrf_field()}}
              <div class="row">
                <div class="form-group has-feedback col-md-6">
                  <label>Nama Admin</label>
                  <input type="text" class="form-control" value="{{ $data_admin->display_name }}" readonly="">
                  <input type="text" name="id_pengaduan" hidden="" value="">
                </div>
                <div class="form-group has-feedback col-md-6">
                  <label>Tanggal Ditanggapi</label>
                  <input type="text" class="form-control" readonly="" value="{{ $data_tanggapan->created_at }}">
                </div>
              </div>
              <div class="form-group">
                <label>Isi Tanggapan</label>
                <textarea class="form-control" rows="15" name="tanggapan" readonly="">{{ $data_tanggapan->tanggapan }}</textarea>
              </div>
              <div class="box-footer">
                <a href="{{ url('/masyarakat/data-pengaduan') }}" class="btn btn-primary btn-sm col-md-12">Tutup</a>
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