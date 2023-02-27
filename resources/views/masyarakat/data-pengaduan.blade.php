@extends('layouts.app')
@section('title', 'Data Pengaduan')
@section('content')
    @include('komponen.masyarakat.navbar')
    @include('komponen.masyarakat.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Pengaduan
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-newspaper-o"></i> Pengaduan</a></li>
                <li class="active">Data Pengaduan</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <!-- /.box-header -->

                        <div class="box-header">
                            <a href="{{ url('/masyarakat/buat-pengaduan-baru') }}" class="btn btn-primary">Buat Baru</a>

                        </div>
                        <div class="box-body">

                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Judul Laporan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($result as $row)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $row->judul_laporan }}</td>
                                            <td>
                                                @if ($row->status == 1)
                                                    <button class="btn btn-secondary btn-sm">Terkirim</button>
                                                @elseif($row->status == 2)
                                                    <button class="btn btn-primary btn-sm">Diproses</button>
                                                @elseif($row->status == 3)
                                                    <button class="btn btn-success btn-sm">Selesai</button>
                                                @elseif($row->status == 4)
                                                    <button class="btn btn-danger btn-sm">Ditolak</button>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($row->status == 1)
                                                    {{-- <a href="{{ url('/masyarakat/pengaduan/edit/' . $row->id) }}"
                                                        class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a> --}}
                                                    <a href="{{ url('/masyarakat/pengaduan/delete/' . $row->id) }}"
                                                        class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                @elseif($row->status == 2)
                                                    <a href="{{ url('/masyarakat/') }}" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash"></i></a>
                                                @elseif($row->status == 3)
                                                    <a href="{{ url('/masyarakat/pengaduan/detail-tanggapan/' . $row->id) }}"
                                                        class="btn btn-success btn-sm"><i class="fa fa-info"></i></a>
                                                @elseif($row->status == 4)
                                                    <a href="{{ url('/masyarakat/') }}" class=" btn btn-danger btn-sm"><i
                                                            class="fa fa-trash"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    @endforeach
                                </tbody>
                            </table>
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
