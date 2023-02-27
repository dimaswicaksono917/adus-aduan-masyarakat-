@extends('layouts.app')
@section('title', 'Pengaduan Baru')
@section('content')
    @include('komponen.masyarakat.navbar')
    @include('komponen.masyarakat.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Formulir Pengaduan
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-newspaper-o"></i> Pengaduan</a></li>
                <li class="active">Pengaduan Baru</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">

                            <form action="{{ url('/masyarakat/postpengaduan') }}" method="post"
                                enctype="multipart/form-data">">

                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group has-feedback col-md-6">
                                        <label>Nomor Induk Kependudukan</label>
                                        <input type="text" class="form-control" value="{{ Session::get('nik') }}"
                                            readonly="">
                                    </div>
                                    <?php
                                    $tanggal = date('l, d-m-y');
                                    ?>
                                    <div class="form-group has-feedback col-md-6">
                                        <label>Tanggal Laporan</label>
                                        <input type="text" class="form-control" readonly=""
                                            value="{{ $tanggal }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Pelapor</label>
                                    <input type="text" class="form-control" value="{{ Session::get('display_name') }}"
                                        readonly="">
                                </div>
                                <div class="form-group">
                                    <label>Judul Pengaduan</label>
                                    <input type="text" class="form-control" name="judul_laporan"
                                        placeholder="Masukan judul pengaduan" required="">
                                </div>
                                <div class="form-group">
                                    <label>Isi Pengaduan</label>
                                    <textarea class="form-control" rows="10" required="" name="isi_laporan" placeholder="Masukan Laporan anda"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Foto Bukti</label>
                                    <input type="file" class="form-control" name="foto">
                                </div>
                                <div class="box-footer">
                                    <button class="btn btn-primary col-md-12" type="submit">Kirim</button>
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
