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

                            <div class="col-md-2">
                                <label for="ci_nit" class="col-form-label">Ci/Nit</label>
                                <div class="col-md-12">
                                    <input id="ci_nit" type="text" class="form-control{{ $errors->has('ci_nit') ? ' error' : '' }}" name="ci_nit" value="" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="6" data-max-length="30">
                                    <span id="error-ci_nit" class="error-ci_nit" style="color: rgb(220, 53, 69);"></span>
                                    @if ($errors->has('numero_identificacion'))
                                        <span class="text-danger">
                                            {{ $errors->first('numero_identificacion') }}
                                        </span>
                                    @endif
                                </div>           
                            </div>

                            <div class="col-md-2">
                                <label for="da" class="col-form-label">DA</label>
                                <div class="col-md-12">
                                    <input id="da" type="text" class="form-control{{ $errors->has('da') ? ' error' : '' }}" name="da" value="" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="6" data-max-length="30">
                                    <span id="error-da" class="error-da" style="color: rgb(220, 53, 69);"></span>
                                    @if ($errors->has('numero_da'))
                                        <span class="text-danger">
                                            {{ $errors->first('numero_da') }}
                                        </span>
                                    @endif
                                </div>           
                            </div>
                        
                            <div class="col-md-2">
                                <label for="origen" class="col-form-label">Origen</label>
                                <select id="origen" class="form-control{{ $errors->has('origen') ? ' error' : '' }}" name="origen">
                                    <option value="">Seleccionar...</option>
                                    @foreach($lugares as $lugar)
                                        <option value="{{ $lugar->id }}">
                                            {{ $lugar->descripcion }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('origen'))
                                    <span class="text-danger">
                                        {{ $errors->first('origen') }}
                                    </span>
                                @endif                                                         
                            </div>

                            <div class="col-md-2">
                                <label for="destino" class="col-form-label">Destino</label>
                                <select id="destino" class="form-control{{ $errors->has('destino') ? ' error' : '' }}" name="destino">
                                    <option value="">Seleccionar...</option>
                                    @foreach($lugares as $lugar)
                                        <option value="{{ $lugar->id }}">
                                            {{ $lugar->descripcion }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('destino'))
                                    <span class="text-danger">
                                        {{ $errors->first('destino') }}
                                    </span>
                                @endif                                                         
                            </div>

                            <div class="col-md-2">
                                <label for="fecha_salida" class="col-form-label">Fecha Salida</label>
                                <input id="fecha_salida" type="date" class="form-control {{ $errors->has('fecha_salida') ? 'error' : '' }}" name="fecha_salida" autofocus>
                                @if ($errors->has('fecha_salida'))
                                    <span class="text-danger">{{ $errors->first('fecha_salida') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2">
                                <label for="fecha_retorno" class="col-form-label">Fecha Retorno</label>
                                <input id="fecha_retorno" type="date" class="form-control {{ $errors->has('fecha_retorno') ? 'error' : '' }}" name="fecha_retorno" autofocus>
                                @if ($errors->has('fecha_retorno'))
                                    <span class="text-danger">{{ $errors->first('fecha_retorno') }}</span>
                                @endif
                            </div>

                            <div class="col-md-2">
                                <label for="via" class="col-form-label">Via</label>
                                <select id="via" class="form-control{{ $errors->has('via') ? ' error' : '' }}" name="via">
                                    <option value="">Seleccionar...</option>
                                    @foreach($vias as $via)
                                        <option value="{{ $via->id }}">
                                            {{ $via->descripcion }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('via'))
                                    <span class="text-danger">
                                        {{ $errors->first('via') }}
                                    </span>
                                @endif                                                         
                            </div>

                        </div>                    
            
                        <div id="reporte_contrato" class="table-responsive" style="display: none;"> 
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">NRO.</th>
                                        <th class="text-center">FECHA REGISTRO</th>
                                        <th class="text-center">HOJA DE RUTA</th>
                                        <th class="text-center">BENEFICIARIO</th>
                                        <th class="text-center">CI</th>
                                        <th class="text-center">DA</th>
                                        <th class="text-center">CARGO</th>
                                        <th class="text-center">ORIGEN</th>
                                        <th class="text-center">DESTINO</th> 
                                        <th class="text-center">SALIDA</th>
                                        <th class="text-center">RETORNO</th>
                                        <th class="text-center">TOTAL DIA(S)</th>                                              
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
        $('#fecha_inicio_registro, #fecha_fin_registro, #origen, #destino, #fecha_salida, #fecha_retorno, #via').change(function() {
            actualizarReporte();
        });

        // Detecta la escritura en el campo CI/NIT y actualiza el reporte dinámicamente
        $('#ci_nit').on('keyup', function() {
            const valor = $(this).val();
            if (valor.length >= 3 || valor.length === 0) 
                actualizarReporte();
        });

        // Detecta la escritura en el campo CI/NIT y actualiza el reporte dinámicamente
        $('#da').on('keyup', function() {
            const valor = $(this).val();
            if (valor.length >= 1 || valor.length === 0) 
                actualizarReporte();
        });

        // Función para enviar los datos al servidor y mostrar los resultados
        function actualizarReporte() {
            var fechaInicioRegistro = $('#fecha_inicio_registro').val();
            var fechaFinRegistro = $('#fecha_fin_registro').val();
            var ciNit = $('#ci_nit').val();
            var da = $('#da').val();
            var origen = $('#origen').val();
            var destino = $('#destino').val();
            var fechaSalida = $('#fecha_salida').val();
            var fechaRetorno = $('#fecha_retorno').val();
            var via = $('#via').val();

            // Verifica que al menos un campo tenga valor
            if ((fechaInicioRegistro && fechaFinRegistro) || ciNit || da || origen || destino || fechaSalida || fechaRetorno || via) {
                $.ajax({
                    url: '{{ url("reportedetalleviatico/obtieneReporte/") }}',
                    method: 'get',
                    data: {'fechaInicioRegistro': fechaInicioRegistro, 'fechaFinRegistro': fechaFinRegistro, 'ciNit': ciNit, 'da': da, 'origen': origen, 'destino': destino, 'fechaSalida': fechaSalida, 'fechaRetorno': fechaRetorno, 'via': via},
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
                        <td colspan="9" class="text-center">No existen datos para la consulta realizada</td>
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
                            <td class="text-center">${item.hoja_ruta || ''}</td>
                            <td class="text-center">${item.beneficiario || ''}</td>
                            <td class="text-center">${item.ci || ''}</td>
                            <td class="text-center">${item.da || ''}</td>
                            <td class="text-center">${item.cargo || ''}</td>
                            <td class="text-center">${item.origen || ''}</td>
                            <td class="text-center">${item.destino || ''}</td>
                            <td class="text-center">${item.fecha_salida || ''}</td>
                            <td class="text-center">${item.fecha_retorno || ''}</td>
                            <td class="text-center">${item.total_dia || ''}</td>
                        </tr>
                    `;
                });
            } else {
                grillaHtml = `
                    <tr>
                        <td colspan="12" class="text-center">No existen datos para la consulta realizada</td>
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
        const ciNit = document.getElementById('ci_nit').value;
        const da = document.getElementById('da').value;
        const origen = document.getElementById('origen').value;
        const destino = document.getElementById('destino').value;
        const fechaSalida = document.getElementById('fecha_salida').value;
        const fechaRetorno = document.getElementById('fecha_retorno').value;
        const via = document.getElementById('via').value;

        // Crear la URL con los parámetros
        let url = tipo === 'pdf' 
            ? "{{ route('reportedetalleviatico.show') }}" 
            : "{{ route('reportedetalleviatico.export') }}";

        url += `?fechaInicioRegistro=${fechaInicioRegistro}&fechaFinRegistro=${fechaFinRegistro}&ciNit=${ciNit}&da=${da}&origen=${origen}&destino=${destino}&fechaSalida=${fechaSalida}&fechaRetorno=${fechaRetorno}&via=${via}`;

        // Redirigir a la URL generada
        window.open(url, tipo === 'pdf' ? '_blank' : '_self');
    }
</script>
@endsection