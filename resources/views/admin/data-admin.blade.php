@extends('layouts.app')
@section('title', 'Data Admin')
@section('content')
@include('komponen.admin.navbar')
@include('komponen.admin.sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Admin
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Data Master</a></li>
      <li class="active">Data Admin</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        @include('komponen.alert')
        <div class="box">
          <!-- /.box-header -->

          <div class="box-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
              Tambah Data
            </button>

          </div>  
          <div class="box-body">

            <table id="example1" class="table table-bordered table-striped text-center">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Lengkap</th>
                  <th>Nomber Telepon</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                @foreach($result as $row)
                <tr>
                  <td>{{ $no }}</td>
                  <td>{{ $row->display_name }}</td>
                  <td>{{ $row->tlp }}</td>
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEdit{{ $row->id }}"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus{{ $row->id }}"><i class="fa fa-trash"></i></button>
                  </td>
                </tr>
                <?php $no++ ?>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
      @include('admin.modal-crud-admin')
    </div>

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection()