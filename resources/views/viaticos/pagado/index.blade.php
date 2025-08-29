@extends('layouts.app')
@section('titulo','Usuarios')
@section('content')

@section('content')

<div class="pagetitle">
    <h1>Viaticos</h1>
    <div class="d-flex flex-row align-items-center justify-content-between">
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Viaticos Pagados</li>
        </ol>
        </nav>
    </div>

    <div class="d-flex justify-content-between">
        <div class="d-flex">
            @can('expensas.show')
                <a href="{{route('viaticos.show')}}" class="btn btn-danger bi-file-earmark-pdf " title="Generar reporte pdf"  target="_blank">PDF</a>
            @endcan

            @can('expensas.show')
                <a href="{{route('viaticos.export')}}" class="btn btn-success bi-file-earmark-excel" title="Generar reporte excel" >EXCEL</a>
             @endcan
        </div>
    </div>
 </div><!-- End Page Title -->
 <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Viaticos Pagados</h5>
            <p>Cada registro tiene la opción de visualizar <i class="btn btn-warning bi bi-search"></i> un Viatico.</p>

           <!--CONTENIDO -->
            <div class="table-responsive">
                <table cellspacing="0" width="100%" id="datos" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">FECHA REGISTRO</th>
                            <th class="text-center">HOJA DE RUTA</th>
                            <th class="text-center">BENEFICIARIO</th>
                            <th class="text-center">CI</th>
                            <th class="text-center">DA</th>
                            <th class="text-center">CARGO</th>
                            <th class="text-center">ORIGEN</th>
                            <th class="text-center">DESTINO</th>
                            <th class="text-center">MONTO</th>
                            <th class="text-center">OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($viaticos as $viatico)

                            <tr>
                                <td class="text-center">{{$viatico->fecha_registro}}</td>
                                <td class="text-center">{{$viatico->hoja_ruta}}</td>
                                <td class="text-center">{{$viatico->beneficiario}}</td>
                                <td class="text-center">{{$viatico->ci}}</td>
                                <td class="text-center">{{$viatico->da}}</td>
                                <td class="text-center">{{$viatico->cargo}}</td>
                                <td class="text-center">{{$viatico->origen}}</td>
                                <td class="text-center">{{$viatico->destino}}</td>
                                <td class="text-center">{{$viatico->total_viatico_pasaje}}</td>
                                <td class="d-flex justify-content-center" >
                                    @can('viaticos.show')
                                        <a href="{{route('viaticos.showBoletaLiq',$viatico->id)}}" class="btn btn-success bi-file-earmark-pdf " title="Visualizar Liquidación de Viaticos"  target="_blank"></a>
                                    @endcan                                                             
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('assets/js/tablas/basica.js') }}" type="text/javascript"></script>
@endsection