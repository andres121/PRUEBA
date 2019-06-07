@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CLientes
                </div>
                <div id ="alert" class="alert alert-info"></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                      <thead>
                       <tr>
                           <th>Nombre</th>
                           <th>cedula</th>
                           <th>celular</th>
                           <th>direccion</th>
                           <th>departamento</th>
                           <th>ciudad</th>
                           <th>agente</th>
                           <th>acciones</th>
                       </tr>
                   </thead>
                   <tbody>
                     @foreach($cliente as $cli)
                        <tr>
                          <td>{{$cli->nombre}}</td>
                          <td>{{$cli->cedula}}</td>
                          <td>{{$cli->celular}}</td>
                          <td>{{$cli->dirección}}</td>
                          <td>{{$cli->departamento}}</td>
                          <td>{{$cli->municipio}}</td>
                          <td>{{$cli->cedula}}</td>
                          <td>
                              <div class="col-md-3">
                            <a class="btn btn-primary" href="{{action('clienteController@edit', $cli->id)}}" >edi</a>
                          </div>
                            <div class="col-md-3">
                           <form action="{{action('clienteController@destroy' , $cli->id)}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">

                            <button class="btn btn-danger " type="submit">eli</button>
                          </div>
                          </td>

                         </tr>

                    @endforeach

                    </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
