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
                <form action="/register" method="POST">
                  @csrf
                  <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                      <div class="form-group mb-2">
                        <label for="apenom">APELLIDOS Y NOMBRES</label>
                        <input type="text" class="form-control" name="apenom" id="apenom" placeholder="Apellidos y Nombres">
                        @if ($errors->has('apenom'))
                          <small class="text-danger">{{$errors->first('apenom')}}</small>
                        @endif
                      </div>
                      <div class="form-group mb-2">
                        <label for="dni">DNI</label>
                        <input type="dni" class="form-control" id="dni" name="dni" placeholder="DNI">
                      </div>
                      @if ($errors->has('dni'))
                        <small class="text-danger">{{$errors->first('dni')}}</small>
                      @endif
                      <div class="form-group mb-2">
                        <label for="especialidad">ESPECIALIDAD</label>
                        <select name="especialidad_id" id="especialidad_id" class="form-control">
                          <option value="" disabled selected>Seleccione</option>
                          @foreach ($especialidades as $item)
                              <option value="{{$item->id}}">{{$item->nombre}}</option>
                          @endforeach
                        </select>
                        @if ($errors->has('especialidad_id'))
                          <small class="text-danger">{{$errors->first('especialidad_id')}}</small>
                        @endif
                      </div>
                    </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="/login" class="btn btn-success" title="Iniciar Session">Log In</a>
                  </div>
                </form>
            </div>
        </div>
    </div>
@endsection










