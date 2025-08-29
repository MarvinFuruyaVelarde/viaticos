
@extends('layouts.app')
@section('titulo','Nuevo Usuario')
@section('content')

<div class="pagetitle">
    <h1>LUGARES</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('feriados.index') }}">Lugares</a></li>
        <li class="breadcrumb-item active">Nuevo Lugar</li>
      </ol>
    </nav>
 </div><!-- End Page Title -->
 <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Nuevo Lugares</h5>
           <!--CONTENIDO -->
           {!! Form::open(['route'=>'lugares.store','class'=>'form-horizontal','id'=>'form_reg_lugar','data-form-id'=>'form_reg_lugar']) !!}
                @include('parametricas.lugares._form',['texto' => 'Guardar','color'=>'primary'])
            {!! Form::close() !!}
            <!-- EndCONTENIDO Example -->
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/forms/validarcampos.js') }}" type="text/javascript"></script>
@endsection
