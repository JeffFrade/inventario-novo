@extends('adminlte::page')

@section('page_title', 'Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
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

        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $totalEquipmentTypesIndex }}</h3>

                    <p>Tipos de Equipamentos</p>
                </div>
                <div class="icon">
                    <i class="fa fa-tags"></i>
                </div>
                <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $totalRoomsIndex }}</h3>

                    <p>Salas</p>
                </div>
                <div class="icon">
                    <i class="fa fa-building"></i>
                </div>
                <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $totalUsersIndex }}</h3>

                    <p>Usuários</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <br/>
    <div class="row">
        <section class="col-lg-5 connectedSortable ui-sortable">
            <div class="card">
                <div class="card-header with-border bg-light" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>Equipamentos Por Tipo
                    </h3>
                </div>

                <div class="card-body">
                    <div style="width: 100%; position: relative; height: 400px; margin-top: 10px;">
                        <canvas id="equipmentsByType" width="550" height="400"></canvas>
                    </div>
                </div>

                @include('util.overlay')
            </div>
        </section>

        <section class="col-lg-7 connectedSortable ui-sortable">
            <div class="card">
                <div class="card-header with-border bg-light" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="fas fa-chart-bar mr-1"></i>Equipamentos Por Sala
                    </h3>
                </div>

                <div class="card-body">
                    <div style="width: 100%; position: relative; height: 400px; margin-top: 10px; padding: 0">
                        <canvas id="equipmentsByRoom" width="300" height="175"></canvas>
                    </div>
                </div>

                @include('util.overlay')
            </div>
        </section>
    </div>
@stop

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajax({
                contentType: 'application/x-www-form-urlencoded',

                method: 'GET',
                url: '/dashboard/charts/equipments/equipments-by-type',
                timeout: 0,
                success: function (response) {
                    pieChart('equipmentsByType', 'Equipamentos por Tipo', response, 'doughnut');
                }
            });

            $.ajax({
                contentType: 'application/x-www-form-urlencoded',

                method: 'GET',
                url: '/dashboard/charts/equipments/equipments-by-room',
                timeout: 0,
                success: function (response) {
                    barChart('equipmentsByRoom', 'Equipamentos por Sala', response, 'bar');
                }
            });
        });
    </script>
@stop
