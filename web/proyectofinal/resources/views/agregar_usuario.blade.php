@extends('layouts/master')
@section('contenido')

  <div class="row mt-5 ">
      <div class="col-12 col-md-6 col-lg-5 mx-auto">
          <div class="card">
              <div class="card-header bg-info">
                  <span>Agregar Usuario</span>
              </div>
              <div class="card-body">
                  <div class="mb-3">
                      <label for="nombreU-txt" class="form-label">Nombre </label>
                      <input type="text" id="nombreU-txt" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="apellido-txt" class="form-label">Apellido</label>
                      <input type="text" id="apellido-txt" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="con-txt" class="form-label">Contraseña</label>
                      <input type="password" id="con-txt" class="form-control">
                  </div>

                  <div class="card-footer d-grid gap-1">
                      <button type="button" class="btn btn-warning">Agregar</button>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
@section('javascript')
    
@endsection