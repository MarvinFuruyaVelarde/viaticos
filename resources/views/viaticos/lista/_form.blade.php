<p>Debe rellenar todos los campos marcados con <strong class="text-danger">(*)</strong>. Al momento de registrar un espacio</p>
<input id="beneficiarioH" type="hidden" name="beneficiarioH" value="{{ old('beneficiarioH',$viatico->beneficiario) }}">
<input id="daH" type="hidden" name="daH" value="{{ old('daH',$viatico->da) }}">
<input id="numero_cuentaH" type="hidden" name="numero_cuentaH" value="{{ old('numero_cuentaH',$viatico->numero_cuenta) }}">
<input id="escalaH" type="hidden" name="escalaH" value="{{ old('escalaH',$viatico->escala) }}">
<input id="estadoH" type="hidden" name="estadoH" value="{{ old('estadoH',$viatico->estado_beneficiario) }}">
<input id="cargoH" type="hidden" name="cargoH" value="{{ old('cargoH',$viatico->cargo) }}">
<input id="total_diaH" type="hidden" name="total_diaH" value="{{ old('total_diaH',$viatico->total_dia) }}">
<input id="medio_dia_100H" type="hidden" name="medio_dia_100H" value="{{ old('medio_dia_100H',$viatico->medio_dia_100) }}">
<input id="dia_entero_100H" type="hidden" name="dia_entero_100H" value="{{ old('dia_entero_100H',$viatico->dia_entero_100) }}">
<input id="fecha_max_presentacionH" type="hidden" name="fecha_max_presentacionH" value="{{ old('fecha_max_presentacionH',\Carbon\Carbon::parse($viatico->fecha_maxima_presentacion)->format('d/m/Y')) }}">                        
<input id="retencion_pasaje_16H" type="hidden" name="retencion_pasaje_16H" value="{{ old('retencion_pasaje_16H',$viatico->retencion_pasaje) }}">
<input id="total_pasajeH" type="hidden" name="total_pasajeH" value="{{ old('total_pasajeH',$viatico->total_pasaje) }}">
<input id="retencion_flete_16H" type="hidden" name="retencion_flete_16H" value="{{ old('retencion_flete_16H',$viatico->retencion_flete) }}">
<input id="total_fleteH" type="hidden" name="total_fleteH" value="{{ old('total_fleteH',$viatico->total_flete) }}">
<input id="total_viaticoB" type="hidden" name="total_viaticoB" value="{{ old('total_viaticoB',$viatico->total_viatico) }}">
<input id="total_viaticoH" type="hidden" name="total_viaticoH" value="{{ old('total_viaticoH',$viatico->total_viatico) }}">
<input id="total_viatico_pasajeH" type="hidden" name="total_viatico_pasajeH" value="">
<input id="monto_viatico" type="hidden" name="monto_viatico" value="">
<input id="distanciaH" type="hidden" name="distanciaH" value="{{ old('distanciaH',$viatico->distancia) }}">
<div class="row mb-1">
    <div class="col-md-1">
    </div>

    <div class="col-md-2">
        <label for="fecha_registro" class="col-form-label">Fecha de Registro <span class="text-danger">(*)</span></label>
        <div class="col-md-11">
            <input id="fecha_registro" type="date" class="form-control {{ $errors->has('fecha_registro') ? ' error' : '' }}" name="fecha_registro" value="{{ old('fecha_registro',$viatico->fecha_registro ?? now()->format('Y-m-d')) }}" autofocus>
            <span id="error-fecha_registro" class="error-fecha_registro" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('fecha_registro'))
                <span class="text-danger">
                    {{ $errors->first('fecha_registro') }}
                </span>
            @endif
        </div>
        <div class="col-md-1">
        </div>
    </div>

    <div class="col-md-8">
        <label for="hoja_ruta" class="col-form-label">Hoja de Ruta <span class="text-danger">(*)</span></label>
        <div class="col-md-12">
            <input id="hoja_ruta" type="text" class="form-control {{ $errors->has('hoja_ruta') ? ' error' : '' }}" name="hoja_ruta" value="{{ old('hoja_ruta',$viatico->hoja_ruta) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50">
            <span id="error-hoja_ruta" class="error-hoja_ruta" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('hoja_ruta'))
                <span class="text-danger">
                    {{ $errors->first('hoja_ruta') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
    </div>
</div>

<div class="row mb-1">
    <div class="col-md-1">
    </div>

    <div class="col-md-2">
        <label for="ci" class="col-form-label">CI <span class="text-danger">(*)</span></label>
        <div class="col-md-11">
            <input id="ci" type="text" class="form-control {{ $errors->has('ci') ? ' error' : '' }}" name="ci" value="{{ old('ci',$viatico->ci) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50">
            <span id="error-ci" class="error-ci" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('ci'))
                <span class="text-danger">
                    {{ $errors->first('ci') }}
                </span>
            @endif
        </div>
        <div class="col-md-1">
        </div>
    </div>

    <div class="col-md-4">
        <label for="beneficiario" class="col-form-label">Nombre del Beneficiario </label>
        <div class="col-md-12">
            <input id="beneficiario" type="text" class="form-control {{ $errors->has('beneficiario') ? ' error' : '' }}" name="beneficiario" value="{{ old('beneficiario',$viatico->beneficiario) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50" disabled>
            <span id="error-beneficiario" class="error-beneficiario" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('beneficiario'))
                <span class="text-danger">
                    {{ $errors->first('beneficiario') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <label for="da" class="col-form-label">DA </label>
        <div class="col-md-12">
            <input id="da" type="text" class="form-control {{ $errors->has('da') ? ' error' : '' }}" name="da" value="{{ old('da',$viatico->da) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50" disabled>
            <span id="error-da" class="error-da" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('da'))
                <span class="text-danger">
                    {{ $errors->first('da') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-2">
        <label for="numero_cuenta" class="col-form-label">Numero de Cuenta </label>
        <div class="col-md-12">
            <input id="numero_cuenta" type="text" class="form-control {{ $errors->has('numero_cuenta') ? ' error' : '' }}" name="numero_cuenta" value="{{ old('numero_cuenta',$viatico->numero_cuenta) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50" disabled>
            <span id="error-numero_cuenta" class="error-numero_cuenta" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('numero_cuenta'))
                <span class="text-danger">
                    {{ $errors->first('numero_cuenta') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <label for="escala" class="col-form-label">Escala </label>
        <div class="col-md-12">
            <input id="escala" type="text" class="form-control {{ $errors->has('escala') ? ' error' : '' }}" name="escala" value="{{ old('escala',$viatico->escala) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50" disabled>
            <span id="error-escala" class="error-escala" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('escala'))
                <span class="text-danger">
                    {{ $errors->first('escala') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
    </div>
</div>

<div class="row mb-1">
    <div class="col-md-1">
    </div>

    @php
        $estado = $viatico->estado_beneficiario === 1 ? 'ACTIVO' : ($viatico->estado_beneficiario === 0 ? 'INACTIVO' : '');
    @endphp

    <div class="col-md-2">
        <label for="estado" class="col-form-label">Estado </label>
        <div class="col-md-11">
            <input id="estado" type="text" class="form-control {{ $errors->has('estado') ? ' error' : '' }}" name="estado" value="{{ old('estado',$estado) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50" disabled>
            <span id="error-estado" class="error-estado" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('estado'))
                <span class="text-danger">
                    {{ $errors->first('estado') }}
                </span>
            @endif
        </div>
        <div class="col-md-1">
        </div>
    </div>

    <div class="col-md-8">
        <label for="cargo" class="col-form-label">Cargo </label>
        <div class="col-md-12">
            <input id="cargo" type="text" class="form-control {{ $errors->has('cargo') ? ' error' : '' }}" name="cargo" value="{{ old('cargo',$viatico->cargo) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50" disabled>
            <span id="error-cargo" class="error-cargo" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('cargo'))
                <span class="text-danger">
                    {{ $errors->first('cargo') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
    </div>
</div>

<div class="row mb-1 text-center">                        
    <div>
        <br>
        <h5 class="text-muted">MISIÓN OFICIAL AL INTERIOR DEL PAIS</h5>
        <hr class="mb-1" style="border-top: 2px solid rgb(1, 41, 112);">
        <br>
    </div>                        
</div>

<div class="row mb-1">
    <div class="col-md-1">
    </div>

    <div class="col-md-2">
        <label for="origen" class="col-form-label">Origen <span class="text-danger">(*)</span></label>
        <div class="col-md-11">
            <select id="origen" class="form-control{{ $errors->has('origen') ? ' error' : '' }}" name="origen">
                <option value="">Seleccionar...</option>
                @foreach($lugares as $lugar)
                    <option value="{{ $lugar->id }}" 
                        {{ old('origen', $viatico->origen) == $lugar->id ? 'selected' : '' }} data-ciudad="{{ $lugar->ciudad }}" data-frontera="{{ $lugar->frontera }}">
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
    </div>

    <div class="col-md-2">
        <label for="salida" class="col-form-label">Salida <span class="text-danger">(*)</span></label>
        <div class="col-md-11">
            <input id="salida" type="date" class="form-control {{ $errors->has('salida') ? ' error' : '' }}" name="salida" value="{{ old('salida',$viatico->fecha_salida) }}" autocomplete="off">
            <span id="error-salida" class="error-salida" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('salida'))
                <span class="text-danger">
                    {{ $errors->first('salida') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <label for="hora_salida" class="col-form-label">Hora <span class="text-danger">(*)</span></label>
        <div class="col-md-12">
            <input id="hora_salida" type="time" class="form-control {{ $errors->has('hora_salida') ? ' error' : '' }}" name="hora_salida" value="{{ old('hora_salida',$viatico->hora_salida) }}" autocomplete="off">
            <span id="error-hora_salida" class="error-hora_salida" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('hora_salida'))
                <span class="text-danger">
                    {{ $errors->first('hora_salida') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-2">
        <label for="destino" class="col-form-label">Destino <span class="text-danger">(*)</span></label>
        <div class="col-md-12">
            <select id="destino" class="form-control{{ $errors->has('destino') ? ' error' : '' }}" name="destino">
                <option value="">Seleccionar...</option>
                @foreach($lugares as $lugar)
                    <option value="{{ $lugar->id }}" 
                        {{ old('destino', $viatico->destino) == $lugar->id ? 'selected' : '' }} data-ciudad="{{ $lugar->ciudad }}" data-frontera="{{ $lugar->frontera }}">
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
    </div>

    <div class="col-md-2">
        <label for="retorno" class="col-form-label">Retorno <span class="text-danger">(*)</span></label>
        <div class="col-md-12">
            <input id="retorno" type="date" class="form-control {{ $errors->has('retorno') ? ' error' : '' }}" name="retorno" value="{{ old('retorno',$viatico->fecha_retorno) }}" autocomplete="off">
            <span id="error-retorno" class="error-retorno" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('retorno'))
                <span class="text-danger">
                    {{ $errors->first('retorno') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <label for="hora_retorno" class="col-form-label">Hora <span class="text-danger">(*)</span></label>
        <div class="col-md-12">
            <input id="hora_retorno" type="time" class="form-control {{ $errors->has('hora_retorno') ? ' error' : '' }}" name="hora_retorno" value="{{ old('hora_retorno',$viatico->hora_retorno) }}" autocomplete="off">
            <span id="error-hora_retorno" class="error-hora_retorno" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('hora_retorno'))
                <span class="text-danger">
                    {{ $errors->first('hora_retorno') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
    </div>
</div>

<div class="row mb-1">
    <div class="col-md-1">
    </div>

    <div class="col-md-1">
        <label for="total_dia" class="col-form-label">Total Dia(s) </label>
        <div class="col-md-11">
            <input id="total_dia" type="text" class="form-control {{ $errors->has('total_dia') ? ' error' : '' }}" name="total_dia" value="{{ old('total_dia',$viatico->total_dia) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50" disabled>
            <span id="error-total_dia" class="error-total_dia" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('total_dia'))
                <span class="text-danger">
                    {{ $errors->first('total_dia') }}
                </span>
            @endif
        </div>
        <div class="col-md-1">
        </div>
    </div>

    <div class="col-md-3">
        <label for="fecha_max_presentacion" class="col-form-label">Fec. Máx. Presentación Informe (8 dias habiles) </label>
        <div class="col-md-12">
            <input id="fecha_max_presentacion" type="text" class="form-control {{ $errors->has('fecha_max_presentacion') ? ' error' : '' }}" name="fecha_max_presentacion" value="{{ old('fecha_max_presentacion', $viatico->fecha_maxima_presentacion ? \Carbon\Carbon::parse($viatico->fecha_maxima_presentacion)->format('d/m/Y') : '') }}" disabled>                                                                                                                                                                            
            <span id="error-fecha_max_presentacion" class="error-fecha_max_presentacion" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('fecha_max_presentacion'))
                <span class="text-danger">
                    {{ $errors->first('fecha_max_presentacion') }}
                </span>
            @endif
        </div>                                
    </div>

    <div class="col-md-2">
        <label for="distancia" class="col-form-label">Distancia</label>
        <div class="col-md-11">
            <input id="distancia" type="text" class="form-control {{ $errors->has('distancia') ? ' error' : '' }}" name="distancia" value="{{ old('distancia',$viatico->distancia) }}" autocomplete="off" disabled>
            <span id="error-distancia" class="error-distancia" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('distancia'))
                <span class="text-danger">
                    {{ $errors->first('distancia') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-2">
        <label for="via" class="col-form-label">Via <span class="text-danger">(*)</span></label>
        <div class="col-md-11">
            <select id="via" class="form-control{{ $errors->has('via') ? ' error' : '' }}" name="via">
                <option value="">Seleccionar...</option>
                @foreach($vias as $via)
                    <option value="{{ $via->id }}" 
                        {{ old('via', $viatico->via) == $via->id ? 'selected' : '' }}>
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

    <div class="col-md-2">
        <label for="descripcion" class="col-form-label">Descripción <span class="text-danger">(*)</span></label>
        <textarea id="descripcion" class="form-control {{ $errors->has('descripcion') ? ' error' : '' }}" name="descripcion" rows="5" onkeyup="this.value = this.value.toUpperCase();">{{ old('descripcion', $viatico->descripcion) }}</textarea>
        <span id="error-descripcion" class="error-descripcion" style="color: rgb(220, 53, 69);"></span>
        @if ($errors->has('descripcion'))
            <span class="text-danger">
                {{ $errors->first('descripcion') }}
            </span>
        @endif
    </div>

    <div class="col-md-1">
    </div>
</div>

<div class="row mb-1">
    <div class="col-md-1">
    </div>

    <div class="col-md-2">
        <label for="medio_dia_100" class="col-form-label">Medio Dia Al 100% </label>
        <div class="col-md-11">
            <input id="medio_dia_100" type="text" class="form-control {{ $errors->has('medio_dia_100') ? ' error' : '' }}" name="medio_dia_100" value="{{ old('medio_dia_100',$viatico->medio_dia_100) }}" autocomplete="off" disabled>
            <span id="error-medio_dia_100" class="error-medio_dia_100" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('medio_dia_100'))
                <span class="text-danger">
                    {{ $errors->first('medio_dia_100') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-2">
        <label for="dia_entero_100" class="col-form-label">Dia Entero al 100% </label>
        <div class="col-md-12">
            <input id="dia_entero_100" type="text" class="form-control {{ $errors->has('dia_entero_100') ? ' error' : '' }}" name="dia_entero_100" value="{{ old('dia_entero_100',$viatico->dia_entero_100) }}" autocomplete="off" disabled>
            <span id="error-dia_entero_100" class="error-dia_entero_100" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('dia_entero_100'))
                <span class="text-danger">
                    {{ $errors->first('dia_entero_100') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-2">
        <label for="medio_dia_70" class="col-form-label">Medio Dia Al 70% </label>
        <div class="col-md-12">
            <input id="medio_dia_70" type="text" class="form-control {{ $errors->has('medio_dia_70') ? ' error' : '' }}" name="medio_dia_70" value="{{ old('medio_dia_70',$viatico->medio_dia_70) }}" autocomplete="off">
            <span id="error-medio_dia_70" class="error-medio_dia_70" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('medio_dia_70'))
                <span class="text-danger">
                    {{ $errors->first('medio_dia_70') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-2">
        <label for="dia_entero_70" class="col-form-label">Dia Entero al 100% </label>
        <div class="col-md-12">
            <input id="dia_entero_70" type="text" class="form-control {{ $errors->has('dia_entero_70') ? ' error' : '' }}" name="dia_entero_70" value="{{ old('dia_entero_70',$viatico->dia_entero_70) }}" autocomplete="off">
            <span id="error-dia_entero_70" class="error-dia_entero_70" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('dia_entero_70'))
                <span class="text-danger">
                    {{ $errors->first('dia_entero_70') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <div class="col-sm-10">
            <label for="retencion_total_viatico" class="col-form-label">Ret. 13% </label>
        </div>
        <div class="col-sm-10 d-flex align-items-center">
            <div class="form-check me-3">
                <input id="retencion_total_viatico1"  class="form-check-input" type="radio" name="retencion_total_viatico" value="S" {{ old('retencion_total_viatico', $viatico->retencion_total_viatico ?? '0') != '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="tipo_canon1">Si</label>
            </div>
            <div class="form-check">
                <input id="retencion_total_viatico2" class="form-check-input" type="radio" name="retencion_total_viatico" value="N" {{ old('retencion_total_viatico', $viatico->retencion_total_viatico ?? '0') == '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="tipo_canon2">No</label>
            </div>
        </div>
    </div>

    <div class="col-md-1">
        <label for="total_viatico" class="col-form-label">Total Viaticos </label>
        <div class="col-md-12">
            <input id="total_viatico" type="text" class="form-control {{ $errors->has('total_viatico') ? ' error' : '' }}" name="total_viatico" value="{{ old('total_viatico',$viatico->total_viatico) }}" autocomplete="off" disabled>
            <span id="error-total_viatico" class="error-total_viatico" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('total_viatico'))
                <span class="text-danger">
                    {{ $errors->first('total_viatico') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
    </div>
</div>

<div class="row mb-1">
    <div class="col-md-1">
    </div>

    <div class="col-md-1">
        <label for="pasaje" class="col-form-label">Pasaje(s) </label>
        <div class="col-md-11">
            <input id="pasaje" type="text" class="form-control {{ $errors->has('pasaje') ? ' error' : '' }}" name="pasaje" value="{{ old('pasaje',$viatico->pasaje) }}" autocomplete="off">
            <span id="error-pasaje" class="error-pasaje" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('pasaje'))
                <span class="text-danger">
                    {{ $errors->first('pasaje') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <div class="col-sm-10">
            <label for="retencion_pasaje" class="col-form-label">Ret. 16% </label>
        </div>
        <div class="col-sm-10 d-flex align-items-center">
            <div class="form-check me-3">
                <input id="retencion_pasaje1"  class="form-check-input" type="radio" name="retencion_pasaje" value="S" {{ old('retencion_pasaje', $viatico->retencion_pasaje ?? '0') != '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="tipo_canon1">Si</label>
            </div>
            <div class="form-check">
                <input id="retencion_pasaje2" class="form-check-input" type="radio" name="retencion_pasaje" value="N" {{ old('retencion_pasaje', $viatico->retencion_pasaje ?? '0') == '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="tipo_canon2">No</label>
            </div>
        </div>
    </div>

    <div class="col-md-1">
        <label for="retencion_pasaje_16" class="col-form-label">R. Pasaje(s)</span></label>
        <div class="col-md-10">
            <input id="retencion_pasaje_16" type="text" class="form-control {{ $errors->has('retencion_pasaje_16') ? ' error' : '' }}" name="retencion_pasaje_16" value="{{ old('retencion_pasaje_16',$viatico->retencion_pasaje) }}" autocomplete="off" disabled>
            <span id="error-retencion_pasaje_16" class="error-retencion_pasaje_16" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('retencion_pasaje_16'))
                <span class="text-danger">
                    {{ $errors->first('retencion_pasaje_16') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <label for="total_pasaje" class="col-form-label">T. Pasaje(s)</span></label>
        <div class="col-md-10">
            <input id="total_pasaje" type="text" class="form-control {{ $errors->has('total_pasaje') ? ' error' : '' }}" name="total_pasaje" value="{{ old('total_pasaje',$viatico->total_pasaje) }}" autocomplete="off" disabled>
            <span id="error-total_pasaje" class="error-total_pasaje" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('total_pasaje'))
                <span class="text-danger">
                    {{ $errors->first('total_pasaje') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <label for="flete" class="col-form-label">Flete(s) </label>
        <div class="col-md-12">
            <input id="flete" type="text" class="form-control {{ $errors->has('flete') ? ' error' : '' }}" name="flete" value="{{ old('flete',$viatico->flete) }}" autocomplete="off">
            <span id="error-flete" class="error-flete" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('flete'))
                <span class="text-danger">
                    {{ $errors->first('flete') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <div class="col-sm-12">
            <label for="retencion_flete" class="col-form-label">Ret. 16% </label>
        </div>
        <div class="col-sm-10 d-flex align-items-center">
            <div class="form-check me-3">
                <input id="retencion_flete1"  class="form-check-input" type="radio" name="retencion_flete" value="S" {{ old('retencion_flete', $viatico->retencion_flete ?? '0') != '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="tipo_canon1">Si</label>
            </div>
            <div class="form-check">
                <input id="retencion_flete2" class="form-check-input" type="radio" name="retencion_flete" value="N" {{ old('retencion_flete', $viatico->retencion_flete ?? '0') == '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="tipo_canon2">No</label>
            </div>
        </div>
    </div>

    <div class="col-md-1">
        <label for="retencion_flete_16" class="col-form-label">R. Flete(s) </label>
        <div class="col-md-12">
            <input id="retencion_flete_16" type="text" class="form-control {{ $errors->has('retencion_flete_16') ? ' error' : '' }}" name="retencion_flete_16" value="{{ old('retencion_flete_16',$viatico->retencion_flete) }}" autocomplete="off" disabled>
            <span id="error-retencion_flete_16" class="error-retencion_flete_16" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('retencion_flete_16'))
                <span class="text-danger">
                    {{ $errors->first('retencion_flete_16') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <label for="total_flete" class="col-form-label">T. Flete(s) </label>
        <div class="col-md-12">
            <input id="total_flete" type="text" class="form-control {{ $errors->has('total_flete') ? ' error' : '' }}" name="total_flete" value="{{ old('total_flete',$viatico->total_flete) }}" autocomplete="off" disabled>
            <span id="error-total_flete" class="error-total_flete" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('total_flete'))
                <span class="text-danger">
                    {{ $errors->first('total_flete') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-2">
        <label for="total_viatico_pasaje" class="col-form-label">Total Viaticos / Pasajes </label>
        <div class="col-md-12">
            <input id="total_viatico_pasaje" type="text" class="form-control {{ $errors->has('total_viatico_pasaje') ? ' error' : '' }}" name="total_viatico_pasaje" value="{{--{{ old('codigo',$contrato->codigo) }}--}}" autocomplete="off" disabled>
            <span id="error-total_viatico_pasaje" class="error-total_viatico_pasaje" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('total_viatico_pasaje'))
                <span class="text-danger">
                    {{ $errors->first('total_viatico_pasaje') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
    </div>
</div>

<br>

<div class="row mt-2">
    <div class="text-center">
        <button type="submit" class="btn btn-{{ $color }}">{{ $texto }}</button>
        <a href="{{ route('viaticos.index') }}" class="btn btn-warning">Cancelar</a>
    </div>
</div>
@section('scripts')
<script>

    // Calculo de diferencia de días y monto de viático / tipo de comisión
    document.addEventListener("DOMContentLoaded", function () {
        // Elementos del DOM
        const salida = document.getElementById("salida");
        const retorno = document.getElementById("retorno");
        const totalDiaH = document.getElementById("total_diaH");
        const totalDia = document.getElementById("total_dia");
        const medioDia100H = document.getElementById("medio_dia_100H");
        const medioDia100 = document.getElementById("medio_dia_100");
        const diaEntero100H = document.getElementById("dia_entero_100H");
        const diaEntero100 = document.getElementById("dia_entero_100");
        const totalViaticoB = document.getElementById("total_viaticoB");
        const totalViaticoH = document.getElementById("total_viaticoH");
        const totalViatico = document.getElementById("total_viatico");
        const origenSelect = document.getElementById("origen");
        const destinoSelect = document.getElementById("destino");
        const montoViaticoInput = document.getElementById("monto_viatico");
        const distancia = document.getElementById("distancia");
        const distanciaH = document.getElementById("distanciaH");
        const escala = document.getElementById("escala");
        const horaRetorno = document.getElementById("hora_retorno");

        const retencionTotalViaticoSi = document.getElementById("retencion_total_viatico1");
        const retencionTotalViaticoNo = document.getElementById("retencion_total_viatico2");

        let tipoViatico = "";

        // Función para calcular diferencia de días y monto de viático
        function calcularDiferencia() {
            if (salida.value && retorno.value && horaRetorno.value) {
                const fechaSalida = new Date(salida.value);
                const fechaRetorno = new Date(retorno.value);
                const montoViatico = parseFloat(montoViaticoInput.value) || 0; // Convertir a número

                if (fechaRetorno >= fechaSalida) {
                    const diferenciaTiempo = fechaRetorno.getTime() - fechaSalida.getTime();
                    const diferenciaDias = Math.floor(diferenciaTiempo / (1000 * 60 * 60 * 24));

                    totalDiaH.value = diferenciaDias + 1;
                    totalDia.value = diferenciaDias + 1;

                    const [hora, minuto] = horaRetorno.value.split(":").map(Number);

                    // Hora límite: 14:30
                    if (hora < 14 || (hora === 14 && minuto < 31)) {
                        medioDia100H.value = 0; 
                        medioDia100.value = 0; 
                    } else {
                        medioDia100H.value = 1;
                        medioDia100.value = 1;
                    }

                    diaEntero100H.value = diferenciaDias;
                    diaEntero100.value = diferenciaDias;

                    const diasEnteros = parseInt(diaEntero100.value) || 0;
                    const medioDia = parseInt(medioDia100.value) || 0;
                    console.log("diasEnteros:", diasEnteros);
                    console.log("medioDia:", medioDia);
                    console.log("montoViatico:", montoViatico);
                    const totalViaticoCalculado = parseInt(((diasEnteros * montoViatico) + (medioDia / 2 * montoViatico))).toFixed(2);
                    totalViaticoB.value = totalViaticoCalculado;
                    totalViaticoH.value = totalViaticoCalculado;
                    totalViatico.value = totalViaticoCalculado;
                } else {
                    totalDiaH.value = "";
                    totalDia.value = "";
                    medioDia100.value = "";
                    diaEntero100.value = "";
                    totalViaticoB.value = "";
                    totalViaticoH.value = "";
                    totalViatico.value = "";
                    alert("La fecha de retorno no puede ser menor a la fecha de salida");
                    retorno.value = "";
                    retorno.focus();
                }
            } else {
                totalDia.value = "";
                medioDia100.value = "";
                diaEntero100.value = "";
                totalViaticoB.value = "";
                totalViaticoH.value = "";
                totalViatico.value = "";
            }
        }

        // Función para identificar tipo de comisión
        function obtenerCiudades() {
            alert('Ingresa');
            const origenOption = origenSelect.options[origenSelect.selectedIndex];
            const destinoOption = destinoSelect.options[destinoSelect.selectedIndex];

            const origenCiudad = origenOption.getAttribute("data-ciudad") || "";
            const destinoCiudad = destinoOption.getAttribute("data-ciudad") || "";
            const origenCiudadFrontera = origenOption.getAttribute("data-frontera") || "";
            const destinoCiudadFrontera = destinoOption.getAttribute("data-frontera") || "";

            if (origenCiudad && destinoCiudad) {
                if (origenCiudad === destinoCiudad) {
                    if (parseInt(origenCiudadFrontera) === 0 && parseInt(destinoCiudadFrontera) === 0) {
                        tipoViatico = "INTRADEPARTAMENTAL";
                    } else {
                        tipoViatico = "FRONTERA";
                    }
                } else {
                    if (parseInt(origenCiudadFrontera) === 0 && parseInt(destinoCiudadFrontera) === 0) {
                        tipoViatico = "INTERDEPARTAMENTAL";
                    } else {
                        tipoViatico = "FRONTERA";
                    }
                }
            }

            distancia.value = tipoViatico;
            distanciaH.value = tipoViatico;

            // Obtiene el monto de Viático
            $.ajax({
                url: '{{ route("viaticos.obtieneMontoViatico") }}',
                method: 'get',
                data: { 'escala': escala.value, 'tipoViatico': tipoViatico },
                success: function (response) {
                    montoViaticoInput.value = response.monto;
                    calcularDiferencia(); // Recalcular viático después de obtenerlo
                },
                error: function (xhr) {
                    console.error("Error al obtener monto de Viático", xhr);
                }
            });
        }

        //Aplicar el dcto del 13% al Total Viatico
        function calcularDescuentoTotalViatico() {
            const valor = parseFloat(totalViatico.value);
            if (!isNaN(valor)) {
                if (retencionTotalViaticoSi.checked) {
                    totalViatico.value =  (valor - (valor * 0.13)).toFixed(2);
                    totalViaticoH.value =  (valor - (valor * 0.13)).toFixed(2);
                } else if (retencionTotalViaticoNo.checked) {
                    totalViatico.value =  total_viaticoB.value;
                    totalViaticoH.value =  total_viaticoB.value;
                }
            } else {
                totalViatico.value = "";
                totalViaticoH.value = "";
            }
        }

        // Asignar eventos
        salida.addEventListener("change", calcularDiferencia);
        retorno.addEventListener("blur", calcularDiferencia);
        horaRetorno.addEventListener("change", calcularDiferencia);
        origenSelect.addEventListener("change", obtenerCiudades);
        destinoSelect.addEventListener("change", obtenerCiudades);
        montoViaticoInput.addEventListener("input", calcularDiferencia);

        // Asegurar que calcularDiferencia se ejecute después de obtener el monto
        origenSelect.addEventListener("change", calcularDiferencia);
        destinoSelect.addEventListener("change", calcularDiferencia);

        // Calcula el dcto del 13% al Total Viatico
        retencionTotalViaticoSi.addEventListener("change", calcularDescuentoTotalViatico);
        retencionTotalViaticoNo.addEventListener("change", calcularDescuentoTotalViatico);
    });

    //Aplicar el dcto del 16% en Pasaje 
    document.addEventListener("DOMContentLoaded", function () {
        const pasajeInput = document.getElementById("pasaje");
        const retencionPasaje16H = document.getElementById("retencion_pasaje_16H");
        const retencionPasaje16 = document.getElementById("retencion_pasaje_16"); 
        const totalPasajeHInput = document.getElementById("total_pasajeH");
        const totalPasajeInput = document.getElementById("total_pasaje");
        const retencionSi = document.getElementById("retencion_pasaje1");
        const retencionNo = document.getElementById("retencion_pasaje2");

        function calcularDescuentoPasaje() {
            const valor = parseFloat(pasajeInput.value);
            if (!isNaN(valor)) {
                if (retencionSi.checked) {
                    retencionPasaje16H.value = (valor * 0.16).toFixed(2);
                    retencionPasaje16.value = (valor * 0.16).toFixed(2);
                    totalPasajeHInput.value = (valor - (valor * 0.16)).toFixed(2);
                    totalPasajeInput.value = (valor - (valor * 0.16)).toFixed(2);
                } else if (retencionNo.checked) {
                    retencionPasaje16H.value = "";
                    retencionPasaje16.value = "";
                    totalPasajeHInput.value = valor.toFixed(2);
                    totalPasajeInput.value = valor.toFixed(2);
                }
            } else {
                totalPasajeHInput.value = "";
                totalPasajeInput.value = "";
            }
        }

        pasajeInput.addEventListener("input", calcularDescuentoPasaje);
        retencionSi.addEventListener("change", calcularDescuentoPasaje);
        retencionNo.addEventListener("change", calcularDescuentoPasaje);
    });

    //Aplicar el dcto del 16% en Flete 
    document.addEventListener("DOMContentLoaded", function () {
        const fleteInput = document.getElementById("flete");
        const retencionFlete16H = document.getElementById("retencion_flete_16H");
        const retencionFlete16 = document.getElementById("retencion_flete_16");
        const totalFleteHInput = document.getElementById("total_fleteH");
        const totalFleteInput = document.getElementById("total_flete");
        const retencionFleteSi = document.getElementById("retencion_flete1");
        const retencionFleteNo = document.getElementById("retencion_flete2");

        function calcularDescuentoFlete() {
            const valor = parseFloat(fleteInput.value);
            if (!isNaN(valor)) {
                if (retencionFleteSi.checked) {
                    retencionFlete16H.value = (valor * 0.16).toFixed(2);
                    retencionFlete16.value = (valor * 0.16).toFixed(2);
                    totalFleteHInput.value = (valor - (valor * 0.16)).toFixed(2);
                    totalFleteInput.value = (valor - (valor * 0.16)).toFixed(2);
                } else if (retencionFleteNo.checked) {
                    retencionFlete16H.value = "";
                    retencionFlete16.value = "";
                    totalFleteHInput.value = valor.toFixed(2);
                    totalFleteInput.value = valor.toFixed(2);
                }
            } else {
                retencionFlete16H.value = "";
                retencionFlete16.value = "";
                totalFleteHInput.value = "";
                totalFleteInput.value = "";
            }
        }

        fleteInput.addEventListener("input", calcularDescuentoFlete);
        retencionFleteSi.addEventListener("change", calcularDescuentoFlete);
        retencionFleteNo.addEventListener("change", calcularDescuentoFlete);
    });

    //Calcular el Total de Viaticos / Pasajes
    document.addEventListener("DOMContentLoaded", function () {
        const totalViatico = document.getElementById("total_viatico");
        const totalPasajeInput = document.getElementById("total_pasaje");
        const totalFleteInput = document.getElementById("total_flete");
        const totalViaticoPasajeH = document.getElementById("total_viatico_pasajeH");
        const totalViaticoPasaje = document.getElementById("total_viatico_pasaje");

        function calcularTotalViaticoPasaje() {
            const pasaje = parseFloat(totalPasajeInput.value) || 0; 
            const flete = parseFloat(totalFleteInput.value) || 0;
            const viatico = parseFloat(totalViatico.value) || 0;
            const total = viatico + pasaje + flete;
            totalViaticoPasajeH.value = total.toFixed(2);
            totalViaticoPasaje.value = total.toFixed(2);
        }

        // Observar cambios usando setInterval
        setInterval(calcularTotalViaticoPasaje, 100);

        // También puedes llamar manualmente a la función si actualizas los valores con JS
        calcularTotalViaticoPasaje();
    });

    document.addEventListener("DOMContentLoaded", function () {
        const apiUrl = "http://181.115.232.166:8086/api/servicio_sarhv2?api_key=key_sarhv2_prod_fnPqT5xQEi5Vcb9wKwbCf65c3BjVGyBB";
        const ciInput = document.getElementById("ci");
        const beneficiarioHInput = document.getElementById("beneficiarioH");
        const daHInput = document.getElementById("daH");
        const numeroCuentaHInput = document.getElementById("numero_cuentaH");
        const escalaHInput = document.getElementById("escalaH");
        const estadoHInput = document.getElementById("estadoH");
        const cargoHInput = document.getElementById("cargoH");
        const beneficiarioInput = document.getElementById("beneficiario");
        const daInput = document.getElementById("da");
        const numeroCuentaInput = document.getElementById("numero_cuenta");
        const escalaInput = document.getElementById("escala");
        const estadoInput = document.getElementById("estado");
        const cargoInput = document.getElementById("cargo");
        const errorSpan = document.getElementById("error-ci");

        async function buscarPorCI(ci) {
            try {
                const response = await fetch(apiUrl);
                if (!response.ok) {
                    throw new Error(`Error al consumir la API: ${response.status}`);
                }
                const data = await response.json();
                const persona = data.find(persona => persona.ci === ci);
                
                // Identificar el Tipo de Escala
                if (persona.fk_id_unidad_organizacional == '1' && persona.denominacion_cargo == 'DIRECTOR GENERAL EJECUTIVO')
                    escala = 2;
                else
                    escala = 3;

                if (persona) {
                    beneficiarioHInput.value = persona.name;
                    daHInput.value = persona.da.substr(2);
                    numeroCuentaHInput.value = persona.numero_cuenta;
                    escalaHInput.value = escala;
                    estadoHInput.value = persona.activo;
                    cargoHInput.value = persona.denominacion_cargo;
                    beneficiarioInput.value = persona.name;
                    daInput.value = persona.da.substr(2);
                    numeroCuentaInput.value = persona.numero_cuenta;
                    escalaInput.value = escala;
                    estadoInput.value = persona.activo === 1 ? "ACTIVO" : "INACTIVO";
                    cargoInput.value = persona.denominacion_cargo;
                    errorSpan.textContent = "";
                } else {
                    beneficiarioHInput.value = "";
                    daHInput.value = "";
                    numeroCuentaHInput.value = "";
                    escalaHInput.value = "";
                    estadoHInput.value = "";
                    cargoHInput.value = "";
                    beneficiarioInput.value = "";
                    daInput.value = "";
                    numeroCuentaInput.value = "";
                    escalaInput.value = "";
                    estadoInput.value = "";
                    cargoInput.value = "";
                    errorSpan.textContent = "No se encontró ninguna persona con este CI.";
                }
            } catch (error) {
                beneficiarioHInput.value = "";
                daHInput.value = "";
                numeroCuentaHInput.value = "";
                escalaHInput.value = "";
                estadoHInput.value = "";
                cargoHInput.value = "";
                beneficiarioInput.value = "";
                daInput.value = "";
                numeroCuentaInput.value = "";
                escalaInput.value = "";
                estadoInput.value = "";
                cargoInput.value = "";
                console.error("Error:", error);
                errorSpan.textContent = "Error al conectar con el servicio ó CI. no registrada.";
                ciInput.focus();
            }
        }

        ciInput.addEventListener("blur", function () {
            const ci = ciInput.value.trim();
            if (ci.length > 0) {
                buscarPorCI(ci);
            }
        });
    });

    // Asigna Fecha Máxima de Presentación
    document.addEventListener("DOMContentLoaded", function () {
        const retornoInput = document.getElementById("retorno");
        const fechaMaxHInput = document.getElementById("fecha_max_presentacionH");
        const fechaMaxInput = document.getElementById("fecha_max_presentacion");

        retornoInput.addEventListener("change", async function () {
            if (retornoInput.value) {
                try {
                    let nuevaFecha = await fechaMaxPresentacion(retornoInput.value, 8); // Esperamos la función asíncrona
                    if (!(nuevaFecha instanceof Date) || isNaN(nuevaFecha.getTime())) {
                        console.error("Error: nuevaFecha no es una fecha válida", nuevaFecha);
                        return;
                    }

                    // Formatear la fecha correctamente
                    fechaMaxHInput.value = nuevaFecha.getDate().toString().padStart(2, '0') + "/" + 
                                        (nuevaFecha.getMonth() + 1).toString().padStart(2, '0') + "/" + 
                                        nuevaFecha.getFullYear();
                    fechaMaxInput.value = nuevaFecha.getDate().toString().padStart(2, '0') + "/" + 
                                        (nuevaFecha.getMonth() + 1).toString().padStart(2, '0') + "/" + 
                                        nuevaFecha.getFullYear();
                } catch (error) {
                    console.error("Error al calcular la fecha máxima de presentación:", error);
                }
            }
        });
    });


    // Función asíncrona para calcular la fecha máxima de presentación
    async function fechaMaxPresentacion(fecha, dias) {
        let contador = 0;
        let nuevaFecha = new Date(fecha);

        if (isNaN(nuevaFecha.getTime())) {
            console.error("Error: fecha de entrada inválida", fecha);
            return new Date(); // Devuelve una fecha válida por defecto
        }

        while (contador < dias + 1) {
            nuevaFecha.setDate(nuevaFecha.getDate() + 1);
            let diaSemana = nuevaFecha.getDay();

            if (diaSemana !== 0 && diaSemana !== 6) { // Evitar sábados y domingos
                contador++;
            }
        }

        let fechaCalculada = new Date(nuevaFecha);
        let contador1 = 0;

        try {
            const response = await $.ajax({
                url: '{{ route("viaticos.obtieneNroDiaFeriado") }}',
                method: 'get',
                data: { 'fechaInicial': fecha, 'fechaFinal': nuevaFecha.toISOString().split('T')[0] }
            });

            while (contador1 < response.nroDiaFeriado) {
                fechaCalculada.setDate(fechaCalculada.getDate() + 1);
                let diaSemana1 = fechaCalculada.getDay();

                if (diaSemana1 !== 0 && diaSemana1 !== 6) {
                    contador1++;
                }
            }
        } catch (error) {
            console.error("Error al obtener número de días feriados:", error);
        }

        return fechaCalculada; // Devuelve la fecha correctamente después de AJAX
    }

</script>
@endsection