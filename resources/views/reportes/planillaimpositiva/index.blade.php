@extends('layouts.app')
@section('titulo','Reporte de Contratos')
@section('content')

@section('content')

<div class="pagetitle">
    <h1>Reporte de Detalle de Viaticos</h1>
    <div class="d-flex flex-row align-items-center justify-content-between">
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item active">Reporte de Detalle de Viaticos</li>
        </ol>
        </nav>
    </div>
    <div class="d-flex justify-content-between">
        <div class="d-flex">
            <a href="javascript:void(0);" class="btn btn-danger bi-file-earmark-pdf " title="Generar reporte pdf"  onclick="generarReporte('pdf')" target="_blank">PDF</a>
            <a href="javascript:void(0);" class="btn btn-success bi-file-earmark-excel" title="Generar reporte excel" onclick="generarReporte('excel')">EXCEL</a>
        </div>
    </div>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reporte de Detalle de Viaticos</h5>
                    <form {{--action="{{route('notacobro.aprobarNotaCobro')}}" method="POST"--}}>
                        @csrf
                        <div class="row mb-5 align-items-center">

                            <div class="col-md-2">
                                <label for="fecha_inicio_registro" class="col-form-label">Fecha Inicio Registro</label>
                                <input id="fecha_inicio_registro" type="date" class="form-control {{ $errors->has('fecha_inicio_registro') ? 'error' : '' }}" name="fecha_inicio_registro" autofocus>
                                @if ($errors->has('fecha_inicio_registro'))
                                    <span class="text-danger">{{ $errors->first('fecha_inicio_registro') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2">
                                <label for="fecha_fin_registro" class="col-form-label">Fecha Fin Registro</label>
                                <input id="fecha_fin_registro" type="date" class="form-control {{ $errors->has('fecha_fin_registro') ? 'error' : '' }}" name="fecha_fin_registro">
                                @if ($errors->has('fecha_fin_registro'))
                                    <span class="text-danger">{{ $errors->first('fecha_fin_registro') }}</span>
                                @endif
                            </div>

                        </div>                    
            
                        <div id="reporte_contrato" class="table-responsive" style="display: none;"> 
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">NRO.</th>
                                        <th class="text-center">FECHA REGISTRO</th>
                                        <th class="text-center">BENEFICIARIO</th>
                                        <th class="text-center">CI</th>
                                        <th class="text-center">DA</th>                                            
                                        <th class="text-center">TOTAL VIATICO</th>
                                    </tr>
                                </thead>
                                <tbody id="dato">
                                    <!-- Aquí se cargarán los datos dinámicos -->
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('assets/js/tablas/basica.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        // Detecta cambios en los filtros y actualiza el reporte
        $('#fecha_inicio_registro, #fecha_fin_registro').change(function() {
            actualizarReporte();
        });

        // Función para enviar los datos al servidor y mostrar los resultados
        function actualizarReporte() {
            var fechaInicioRegistro = $('#fecha_inicio_registro').val();
            var fechaFinRegistro = $('#fecha_fin_registro').val();

            // Verifica que al menos un campo tenga valor
            if (fechaInicioRegistro && fechaFinRegistro) {
                $.ajax({
                    url: '{{ url("reportedetalleviatico/obtieneReporte/") }}',
                    method: 'get',
                    data: {'fechaInicioRegistro': fechaInicioRegistro, 'fechaFinRegistro': fechaFinRegistro},
                    success: function(response) {
                        mostrarConsulta(response);
                    },
                    error: function(xhr) {
                        console.error("Error al mostrar la información solicitada", xhr);
                    }
                });
            } else {
                $('#dato').html(`
                    <tr>
                        <td colspan="6" class="text-center">No existen datos para la consulta realizada</td>
                    </tr>
                `);
            }
        }

        // Estructura la data para mostrarla en la tabla
        function mostrarConsulta(data) {
            document.getElementById('reporte_contrato').style.display = 'block';
            let grillaHtml = '';

            if (data.length > 0) {
                data.forEach(function(item) {
                    grillaHtml += `
                        <tr>    
                            <td class="text-center">${item.id || ''}</td>
                            <td class="text-center">${item.fecha_registro || ''}</td>
                            <td class="text-center">${item.beneficiario || ''}</td>
                            <td class="text-center">${item.ci || ''}</td>
                            <td class="text-center">${item.da || ''}</td>
                            <td class="text-center">${item.total_viatico || ''}</td>
                        </tr>
                    `;
                });
            } else {
                grillaHtml = `
                    <tr>
                        <td colspan="6" class="text-center">No existen datos para la consulta realizada</td>
                    </tr>
                `;
            }
            $('#dato').html(grillaHtml);
        }
    });

    function generarReporte(tipo) {
        // Capturar valores seleccionados en los campos
        const fechaInicioRegistro = document.getElementById('fecha_inicio_registro').value;
        const fechaFinRegistro = document.getElementById('fecha_fin_registro').value;

        // Crear la URL con los parámetros
        let url = tipo === 'pdf' 
            ? "{{ route('reporteplanillaimpositiva.show') }}" 
            : "{{ route('reporteplanillaimpositiva.export') }}";

        url += `?fechaInicioRegistro=${fechaInicioRegistro}&fechaFinRegistro=${fechaFinRegistro}`;

        // Redirigir a la URL generada
        window.open(url, tipo === 'pdf' ? '_blank' : '_self');
    }
</script>
@endsection