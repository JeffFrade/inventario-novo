@extends('adminlte::page')

@section('page_title', 'Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $totalEquipmentsIndex }}</h3>

                    <p>Equipamentos</p>
                </div>
                <div class="icon">
                    <i class="fa fa-server"></i>
                </div>
                <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
@stop
