
@extends('layouts.app')
@section('titulo','Nuevo Usuario')
@section('content')

<div class="pagetitle">
    <h1>VIATICOS</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('viaticos.index') }}">Viaticos</a></li>
        <li class="breadcrumb-item active">Nuevo Viatico</li>
      </ol>
    </nav>
 </div><!-- End Page Title -->
 <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">NuevO Viatico</h5>
           <!--CONTENIDO -->
           {!! Form::open(['route'=>'viaticos.store','class'=>'form-horizontal','id'=>'form_reg_expensa','data-form-id'=>'form_reg_expensa']) !!}
                @include('viaticos.lista._form',['texto' => 'Guardar','color'=>'primary'])
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
