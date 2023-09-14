@extends('layout')
@section('contenido')
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">REGISTRO DE ALUMNOS</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                    <form action="/alumno" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="apenom">APELLIDOS Y NOMBRES</label>
                        <input type="email" class="form-control" name="apenom" id="apenom" placeholder="Apellidos y Nombres">
                      </div>
                      <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="dni" class="form-control" id="dni" name="dni" placeholder="DNI">
                      </div>

                      <div class="form-group">
                        <label for="especialidad">ESPECIALIDAD</label>
                        <select name="especialidad_id" id="especialidad_id" class="form-control">
                          <option value="" disabled selected>Seleccione</option>
                          @foreach ($especialidades as $item)
                              <option value="{{$item->id}}">{{$item->nombre}}</option>
                          @endforeach
                        </select>                    
                      </div>
                    </div>                      
                  </form>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection










