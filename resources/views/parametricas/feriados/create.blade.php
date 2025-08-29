
@extends('layouts.app')
@section('titulo','Nuevo Usuario')
@section('content')

<div class="pagetitle">
    <h1>FERIADOS</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('feriados.index') }}">Feriados</a></li>
        <li class="breadcrumb-item active">Nuevo Feriado</li>
      </ol>
    </nav>
 </div><!-- End Page Title -->
 <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Nuevo Feriado</h5>
           <!--CONTENIDO -->
           {!! Form::open(['route'=>'feriados.store','class'=>'form-horizontal','id'=>'form_reg_feriado','data-form-id'=>'form_reg_feriado']) !!}
                @include('parametricas.feriados._form',['texto' => 'Guardar','color'=>'primary'])
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
