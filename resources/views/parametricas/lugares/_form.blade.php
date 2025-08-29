<p>
    Debe rellenar todos los campos marcados con <strong class="text-danger">(*)</strong>.
    Al momento de registrar/editar una expensa</p>
<div class="row mb-1">
    <label for="descripcion" class="col-md-4 col-form-label text-right">Descripcion: <span class="text-danger">(*)</span></label>
    <div class="col-md-6">
        <input id="descripcion" type="text" class="form-control {{ $errors->has('descripcion') ? ' error' : '' }}" name="descripcion" value="{{ old('descripcion',$lugar->descripcion) }}" autofocus onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" data-input-id="descripcion" data-validate="length" data-min-length="3" data-max-length="50">
        <span id="error-descripcion" class="error-descripcion" style="color: rgb(220, 53, 69);"></span>
        @if ($errors->has('descripcion'))
            <span class="text-danger">
                {{ $errors->first('descripcion') }}
            </span>
            
        @endif
    </div>
</div>

<div class="row mb-1">
    <label for="ciudad" class="col-md-4 col-form-label text-right ">Ciudad <span class="text-danger">(*)</span></label>
    <div class="col-md-6">
        <select id="ciudad" class="form-control{{ $errors->has('ciudad') ? ' error' : '' }}" name="ciudad">
            <option value="">Seleccionar...</option>
            @foreach($ciudades as $ciudad)
                <option value="{{ $ciudad->id }}" 
                    {{ old('estado', $lugar->ciudad) == $ciudad->id ? 'selected' : '' }}>
                    {{ $ciudad->descripcion }}
                </option>
            @endforeach
        </select>
        @if ($errors->has('ciudad'))
            <span class="text-danger">
                {{ $errors->first('ciudad') }}
            </span>
        @endif
    </div>
</div>

<div class="row mb-1">
    <label for="frontera" class="col-md-4 col-form-label text-right">Frontera <span class="text-danger">(*)</span></label>
    <div class="col-md-6">
        <select id="frontera" class="form-control{{ $errors->has('frontera') ? ' error' : '' }}" name="frontera">
            <option value="">Seleccionar...</option>
            <option value="1" {{ old('frontera', $lugar->frontera) == 1 ? 'selected' : '' }}>SI</option>
            <option value="0" {{ old('frontera', $lugar->frontera) === 0 || old('frontera', $lugar->frontera) === '0' ? 'selected' : '' }}>NO</option>
        </select>
        @if ($errors->has('frontera'))
            <span class="text-danger">
                {{ $errors->first('frontera') }}
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
                    {{ old('estado', $lugar->estado) == $estado->id ? 'selected' : '' }}>
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
        <a href="{{ route('lugares.index') }}" class="btn btn-warning">Cancelar</a>
    </div>
</div>

