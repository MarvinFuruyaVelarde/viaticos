<p>
    Debe rellenar todos los campos marcados con <strong class="text-danger">(*)</strong>.
    Al momento de registrar/editar una expensa</p>
<div class="row mb-1">
    <label for="descripcion" class="col-md-4 col-form-label text-right">Descripcion: <span class="text-danger">(*)</span></label>
    <div class="col-md-6">
        <input id="descripcion" type="text" class="form-control {{ $errors->has('descripcion') ? ' error' : '' }}" name="descripcion" value="{{ old('descripcion',$feriado->descripcion) }}" autofocus onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-input-id="descripcion" data-validate="length" data-min-length="3" data-max-length="50">
        <span id="error-descripcion" class="error-descripcion" style="color: rgb(220, 53, 69);"></span>
        @if ($errors->has('descripcion'))
            <span class="text-danger">
                {{ $errors->first('descripcion') }}
            </span>
            
        @endif
    </div>
</div>

<div class="row mb-1">
    <label for="fecha" class="col-md-4 col-form-label text-right">Fecha <span class="text-danger">(*)</span></label>
    <div class="col-md-6">
        <input id="fecha" type="date" class="form-control {{ $errors->has('fecha') ? ' error' : '' }}" name="fecha" value="{{ old('fecha',$feriado->fecha) }}" autofocus onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-input-id="descripcion" data-validate="length" data-min-length="2" data-max-length="50">
        <span id="error-fecha" class="error-fecha" style="color: rgb(220, 53, 69);"></span>
        @if ($errors->has('fecha'))
            <span class="text-danger">
                {{ $errors->first('fecha') }}
            </span>
            
        @endif
    </div>
</div>

<div class="row mb-1">
    <label for="estado" class="col-md-4 col-form-label text-right ">Estado <span class="text-danger">(*)</span></label>
    <div class="col-md-6">
        <select id="estado" class="form-control{{ $errors->has('estado') ? ' error' : '' }}" name="estado">
            <option value="">Seleccionar...</option>
            @foreach($estados as $estado)
                <option value="{{ $estado->id }}" 
                    {{ old('estado', $feriado->estado) == $estado->id ? 'selected' : '' }}>
                    {{ $estado->descripcion }}
                </option>
            @endforeach
        </select>
        @if ($errors->has('estado'))
            <span class="text-danger">
                {{ $errors->first('estado') }}
            </span>
        @endif
    </div>
</div>

<div class="row mt-2">
    <div class="text-center">
        <button type="submit" class="btn btn-{{ $color }}">{{ $texto }}</button>
        <a href="{{ route('feriados.index') }}" class="btn btn-warning">Cancelar</a>
    </div>
</div>

