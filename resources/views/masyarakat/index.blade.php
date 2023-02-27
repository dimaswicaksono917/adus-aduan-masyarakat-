@extends('layouts.app')
@section('title', 'Masyarakat Dashboard')
@section('content')
@include('komponen.masyarakat.navbar')
@include('komponen.masyarakat.sidebar')

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content-header">
        <div class="box">
            <div class="box-body">
                <h1>Hi {{ Session::get('display_name') }} as @if (Session::get('role') == 1)
                        Administrator
                    @elseif(Session::get('role') == 2)
                        Petugas
                    @else
                        Masyarakat
                    @endif
                </h1>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>

@endsection()
