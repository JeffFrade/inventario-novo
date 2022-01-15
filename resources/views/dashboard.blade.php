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
    <br/>
    <div class="row">
        <section class="col-lg-5 connectedSortable ui-sortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
                <div class="card-header with-border bg-light" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="fas fa-chart-pie mr-1"></i>Equipamentos Por Tipo
                    </h3>
                </div>

                <div class="card-body">
                    <div style="width: 100%; position: relative; height: 300px; margin-top: 10px;">
                        <canvas id="equipmentsByRoom" width="500" height="300"></canvas>
                    </div>
                </div>
        </section>
    </div>
@stop

@section('js')
    <script>
        const ctx = document.getElementById('equipmentsByRoom').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Red',
                    'Blue',
                    'Yellow'
                ],
                datasets: [{
                    label: 'Equipamentos Por Sala',
                    data: [300, 50, 100],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            }
        });
    </script>
@stop
