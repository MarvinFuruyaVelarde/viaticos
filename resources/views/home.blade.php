@extends('layouts.app')

@section('titulo','Inicio')

@section('content')

<div class="pagetitle">
  <h1>Inicio</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="">Inicio</a></li>
      <li class="breadcrumb-item active">Resúmen de Información</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
  <div class="row">
    <div class="col-lg-12">
      <div class="row" >
        <!-- Sales Card -->
        <div class="col-xxl-4 col-lg-4 col-md-4" style="height: 100%;">
          <div class="card info-card customers-card" style="height: 100%;">
            <div class="card-body">
              <h5 class="card-title">Nro. Usuarios</h5>
  
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-person"></i>
                </div>
                <div class="ps-3">
                  <h6>{{count($users)}} <span class="text-success small pt-1 fw-bold">Usuarios</span> </h6>
                  
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Sales Card -->
      </div>
  </div>
</section>
@endSection