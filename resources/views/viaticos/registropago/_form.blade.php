<p>Debe revisar todos los campos registrados, correspondiente a Viatico</p>
<input id="beneficiarioH" type="hidden" name="beneficiarioH" value="{{ old('beneficiarioH',$viatico->beneficiario) }}">
<input id="daH" type="hidden" name="daH" value="{{ old('daH',$viatico->da) }}">
<input id="numero_cuentaH" type="hidden" name="numero_cuentaH" value="{{ old('numero_cuentaH',$viatico->numero_cuenta) }}">
<input id="escalaH" type="hidden" name="escalaH" value="{{ old('escalaH',$viatico->escala) }}">
<input id="estadoH" type="hidden" name="estadoH" value="{{ old('estadoH',$viatico->estado_beneficiario) }}">
<input id="cargoH" type="hidden" name="cargoH" value="{{ old('cargoH',$viatico->cargo) }}">
<input id="total_diaH" type="hidden" name="total_diaH" value="{{ old('total_diaH',$viatico->total_dia) }}">
<input id="fecha_max_presentacionH" type="hidden" name="fecha_max_presentacionH" value="{{ old('fecha_max_presentacionH',\Carbon\Carbon::parse($viatico->fecha_maxima_presentacion)->format('d/m/Y')) }}">                        
<input id="retencion_pasaje_16H" type="hidden" name="retencion_pasaje_16H" value="{{ old('retencion_pasaje_16H',$viatico->retencion_pasaje) }}">
<input id="total_pasajeH" type="hidden" name="total_pasajeH" value="{{ old('total_pasajeH',$viatico->total_pasaje) }}">
<input id="retencion_flete_16H" type="hidden" name="retencion_flete_16H" value="{{ old('retencion_flete_16H',$viatico->retencion_flete) }}">
<input id="total_fleteH" type="hidden" name="total_fleteH" value="{{ old('total_fleteH',$viatico->total_flete) }}">
<input id="total_viaticoH" type="hidden" name="total_viaticoH" value="{{ old('total_viaticoH',$viatico->total_viatico) }}">
<input id="total_viatico_pasajeH" type="hidden" name="total_viatico_pasajeH" value="">
<input id="monto_viatico" type="hidden" name="monto_viatico" value="">
<input id="distanciaH" type="hidden" name="distanciaH" value="{{ old('distanciaH',$viatico->distancia) }}">
<input id="accion" type="hidden" name="accion" value="">
<div class="row mb-1">
    <div class="col-md-1">
    </div>

    <div class="col-md-2">
        <label for="fecha_registro" class="col-form-label">Fecha de Registro </label>
        <div class="col-md-11">
            <input id="fecha_registro" type="date" class="form-control {{ $errors->has('fecha_registro') ? ' error' : '' }}" name="fecha_registro" value="{{ old('fecha_registro',$viatico->fecha_registro) }}" disabled>
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
        <label for="hoja_ruta" class="col-form-label">Hoja de Ruta </label>
        <div class="col-md-12">
            <input id="hoja_ruta" type="text" class="form-control {{ $errors->has('hoja_ruta') ? ' error' : '' }}" name="hoja_ruta" value="{{ old('hoja_ruta',$viatico->hoja_ruta) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50" disabled>
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
        <label for="ci" class="col-form-label">CI </label>
        <div class="col-md-11">
            <input id="ci" type="text" class="form-control {{ $errors->has('ci') ? ' error' : '' }}" name="ci" value="{{ old('ci',$viatico->ci) }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50" disabled>
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

    <div class="col-md-2">
        <label for="estado" class="col-form-label">Estado </label>
        <div class="col-md-11">
            <input id="estado" type="text" class="form-control {{ $errors->has('estado') ? ' error' : '' }}" name="estado" value="{{ old('estado',$viatico->estado_beneficiario == 1 ? 'ACTIVO' : 'INACTIVO') }}" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-validate="length" data-min-length="3" data-max-length="50" disabled>
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
        <label for="origen" class="col-form-label">Origen </label>
        <div class="col-md-11">
            <select id="origen" class="form-control{{ $errors->has('origen') ? ' error' : '' }}" name="origen" disabled>
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
        <label for="salida" class="col-form-label">Salida </label>
        <div class="col-md-11">
            <input id="salida" type="date" class="form-control {{ $errors->has('salida') ? ' error' : '' }}" name="salida" value="{{ old('salida',$viatico->fecha_salida) }}" autocomplete="off" disabled>
            <span id="error-salida" class="error-salida" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('salida'))
                <span class="text-danger">
                    {{ $errors->first('salida') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <label for="hora_salida" class="col-form-label">Hora </label>
        <div class="col-md-12">
            <input id="hora_salida" type="time" class="form-control {{ $errors->has('hora_salida') ? ' error' : '' }}" name="hora_salida" value="{{ old('hora_salida',$viatico->hora_salida) }}" autocomplete="off" disabled>
            <span id="error-hora_salida" class="error-hora_salida" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('hora_salida'))
                <span class="text-danger">
                    {{ $errors->first('hora_salida') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-2">
        <label for="destino" class="col-form-label">Destino </label>
        <div class="col-md-12">
            <select id="destino" class="form-control{{ $errors->has('destino') ? ' error' : '' }}" name="destino" disabled>
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
        <label for="retorno" class="col-form-label">Retorno </label>
        <div class="col-md-12">
            <input id="retorno" type="date" class="form-control {{ $errors->has('retorno') ? ' error' : '' }}" name="retorno" value="{{ old('retorno',$viatico->fecha_retorno) }}" autocomplete="off" disabled>
            <span id="error-retorno" class="error-retorno" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('retorno'))
                <span class="text-danger">
                    {{ $errors->first('retorno') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <label for="hora_retorno" class="col-form-label">Hora </label>
        <div class="col-md-12">
            <input id="hora_retorno" type="time" class="form-control {{ $errors->has('hora_retorno') ? ' error' : '' }}" name="hora_retorno" value="{{ old('hora_retorno',$viatico->hora_retorno) }}" autocomplete="off" disabled>
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
            <input id="fecha_max_presentacion" type="text" class="form-control {{ $errors->has('fecha_max_presentacion') ? ' error' : '' }}" name="fecha_max_presentacion" value="{{ old('fecha_max_presentacion',\Carbon\Carbon::parse($viatico->fecha_maxima_presentacion)->format('d/m/Y')) }}" disabled>
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
        <label for="via" class="col-form-label">Via </label>
        <div class="col-md-11">
            <select id="via" class="form-control{{ $errors->has('via') ? ' error' : '' }}" name="via" disabled>
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
        <label for="descripcion" class="col-form-label">Descripción </label>
        <textarea id="descripcion" class="form-control {{ $errors->has('descripcion') ? ' error' : '' }}" name="descripcion" rows="5" onkeyup="this.value = this.value.toUpperCase();" disabled>{{ old('descripcion', $viatico->descripcion) }}</textarea>
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
            <input id="medio_dia_70" type="text" class="form-control {{ $errors->has('medio_dia_70') ? ' error' : '' }}" name="medio_dia_70" value="{{ old('medio_dia_70',$viatico->medio_dia_70) }}" autocomplete="off" disabled>
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
            <input id="dia_entero_70" type="text" class="form-control {{ $errors->has('dia_entero_70') ? ' error' : '' }}" name="dia_entero_70" value="{{ old('dia_entero_70',$viatico->dia_entero_70) }}" autocomplete="off" disabled>
            <span id="error-dia_entero_70" class="error-dia_entero_70" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('dia_entero_70'))
                <span class="text-danger">
                    {{ $errors->first('dia_entero_70') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-2">
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
            <input id="pasaje" type="text" class="form-control {{ $errors->has('pasaje') ? ' error' : '' }}" name="pasaje" value="{{ old('pasaje',$viatico->pasaje) }}" autocomplete="off" disabled>
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
                <input id="retencion_pasaje1"  class="form-check-input" type="radio" name="retencion_pasaje" value="S" {{ old('retencion_pasaje', $viatico->retencion_pasaje ?? '0') != '0' ? 'checked' : '' }} disabled>
                <label class="form-check-label" for="tipo_canon1">Si</label>
            </div>
            <div class="form-check">
                <input id="retencion_pasaje2" class="form-check-input" type="radio" name="retencion_pasaje" value="N" {{ old('retencion_pasaje', $viatico->retencion_pasaje ?? '0') == '0' ? 'checked' : '' }} disabled>
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
            <input id="flete" type="text" class="form-control {{ $errors->has('flete') ? ' error' : '' }}" name="flete" value="{{ old('flete',$viatico->flete) }}" autocomplete="off" disabled>
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
                <input id="retencion_flete1"  class="form-check-input" type="radio" name="retencion_flete" value="S" {{ old('retencion_flete', $viatico->retencion_flete ?? '0') != '0' ? 'checked' : '' }} disabled>
                <label class="form-check-label" for="tipo_canon1">Si</label>
            </div>
            <div class="form-check">
                <input id="retencion_flete2" class="form-check-input" type="radio" name="retencion_flete" value="N" {{ old('retencion_flete', $viatico->retencion_flete ?? '0') == '0' ? 'checked' : '' }} disabled>
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
            <input id="total_viatico_pasaje" type="text" class="form-control {{ $errors->has('total_viatico_pasaje') ? ' error' : '' }}" name="total_viatico_pasaje" value="{{ old('total_viatico_pasaje',$viatico->total_viatico_pasaje) }}" autocomplete="off" disabled>
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

<div class="row mb-1">
    <div class="col-md-1">
    </div>

    <div class="col-md-1">
        <label for="sip" class="col-form-label">SIP </label>
        <div class="col-md-11">
            <input id="sip" type="text" class="form-control {{ $errors->has('sip') ? ' error' : '' }}" name="sip" value="{{ old('sip',$viatico->sip) }}" autocomplete="off">
            <span id="error-sip" class="error-sip" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('sip'))
                <span class="text-danger">
                    {{ $errors->first('sip') }}
                </span>
            @endif
        </div>
    </div>

    <div class="col-md-1">
        <label for="cip" class="col-form-label">CIP </label>
        <div class="col-md-11">
            <input id="cip" type="text" class="form-control {{ $errors->has('cip') ? ' error' : '' }}" name="cip" value="{{ old('cip',$viatico->cip) }}" autocomplete="off">
            <span id="error-cip" class="error-cip" style="color: rgb(220, 53, 69);"></span>
            @if ($errors->has('cip'))
                <span class="text-danger">
                    {{ $errors->first('cip') }}
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
        <a href="{{ route('registrarpagoviaticos.index') }}" class="btn btn-warning">Cancelar</a>
    </div>
</div>
@section('scripts')
@endsection