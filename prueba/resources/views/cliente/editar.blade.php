@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CLientes</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('actualizar', $clientes->id) }}"  role="form">
							               {{ csrf_field() }}

                         <div class="form-group">
                           <br>
                               <div class="col-md-6">
                                  <label for="nombre" class="col-md-4 control-label">nombre</label>

                                  <div class="col-md-8">
                                      <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $clientes->nombre}}">
                                  </div>
                              </div>

                              <div class="col-md-6">
                                <label for="celular" class="col-md-4 control-label">celular</label>

                                <div class="col-md-8">
                                    <input id="celular" type="text" class="form-control" name="celular" value="{{ $clientes->celular}}">

                                </div>
                              </div>
                        </div>
                        <br>
                        <div class="form-group">
                          <div class="col-md-6">
                            <label for="cedula" class="col-md-4 control-label">cedula</label>

                            <div class="col-md-8">
                                <input id="cedula" type="text" class="form-control" name="cedula" value="{{ $clientes->cedula}}">
                            </div>
                          </div>
                          <br>
                          <div class="col-md-6">
                            <label for="ºº .gcción" class="col-md-4 control-label">direccion</label>

                            <div class="col-md-8">
                                <input id="direccion" type="text" class="form-control" name="dirección" value="{{ $clientes->dirección}}">


                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form-group">
                          <div class="col-md-6">

                              <label for="dep_id" class="col-md-4 control-label">departamento</label>

                              <div class="col-md-8">


                                  <select class="form-control" id="dep_id" name="departamento_id">
                                      <option value="{{ $clientes->departamento_id}}">{{  $clientes->departamento_id }}</option>
                                    @foreach ($departamento as $dep)

                                        <option value = "{{ $dep['dep_id']}}">{{ $dep['departamento']}}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>
                          <br>
                          <div class="col-md-6">
                            <label for="dep_id" class="col-md-4 control-label">ciudad</label>

                            <div class="col-md-8">

                                <div class="form-group">


                                  <select class="form-control" id="ciu_id" name="ciudad_id" >

                                    <option value="{{ $clientes->ciudad_id}}">{{ $clientes->ciudad_id}}<option>
                                    @foreach ($ciudad as $ciu)
                                        <option value = "{{ $ciu['ciu_id']}}">{{ $ciu['municipio']}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                          </div>
                        </div>
                        <br>
                        <div class="form-group">

                          <div class="col-md-6">
                            <label for="age_id" class="col-md-4 control-label">agente</label>

                            <div class="col-md-8">

                                <div class="form-group">

                                  <select class="form-control" id="age_id" name="agente_id">
                                    <option value="{{ $clientes->agente_id}}">{{ $clientes->agente_id}}<option>
                                    @foreach ($agente as $age)
                                        <option value = "{{ $age['age_id']}}">{{ $age['nombre']}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                          </div>

                      </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                              <div class="col-md-6">
                              <input type="submit"  value="editar" class="btn btn-success btn-block">
                            </div>

                            </div>
                        </div>
                    </form>
                    <div class="col-md-2">
                      <a href="{{ route('clientes') }}" class="btn btn-info btn-block" >Atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
