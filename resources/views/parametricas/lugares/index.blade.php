@extends('layouts.app')
@section('titulo','Usuarios')
@section('content')

@section('content')

<div class="pagetitle">
    <h1>Lugares</h1>
    <div class="d-flex flex-row align-items-center justify-content-between">
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Lugares</li>
        </ol>
        </nav>
    </div>

    <div class="d-flex justify-content-between">
        <div class="d-flex">
            @can('feriados.show')
                <a href="{{route('feriados.show')}}" class="btn btn-danger bi-file-earmark-pdf " title="Generar reporte pdf"  target="_blank">PDF</a>
            @endcan

            @can('feriados.show')
                <a href="{{route('feriados.export')}}" class="btn btn-success bi-file-earmark-excel" title="Generar reporte excel" >EXCEL</a>
             @endcan
        </div>
        @can('lugares.create')
            <a href="{{route('lugares.create')}}" class="btn btn-primary" title="Crea un nuevo lugar"> <i class="bi bi-plus"></i> Registrar </a>
        @endcan
    </div>
 </div><!-- End Page Title -->
 <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lugares Registrados</h5>
            <p>Cada registro tiene la opción de editar <i class="btn btn-warning bi bi-pencil-square"></i> y eliminar <i class=" btn btn-danger bi bi-trash"></i> un Lugar.</p>

           <!--CONTENIDO -->
            <div class="table-responsive">
                <table cellspacing="0" width="100%" id="datos" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">DESCRIPCIÓN</th>
                            <th class="text-center">CIUDAD</th>
                            <th class="text-center">FRONTERA</th>
                            <th class="text-center">ESTADO</th>
                            <th class="text-center">OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lugares as $lugar)

                            <tr>
                                <td class="text-center">{{$lugar->descripcion}}</td>
                                <td class="text-center">{{$lugar->desc_ciudad}}</td>
                                <td class="text-center">{{$lugar->desc_frontera}}</td>
                                <td class="text-center">{{$lugar->estado}}</td>
                                <td class="d-flex justify-content-center" >
                                    @can('lugares.edit')
                                        <a href="{{route('lugares.edit',$lugar)}}" class="btn btn-warning" title="Modificar Datos"><i class="bi bi-pencil-square"></i></a>
                                    @endcan
                                    @can('lugares.destroy')
                                        <form action="{{ route('lugares.destroy', $lugar->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="Eliminar Registro" onclick="return confirm('¿Está seguro que desea eliminar el LUGAR?');"><i class="bi bi-trash"></i>
                                            </button>
                                        </form>
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