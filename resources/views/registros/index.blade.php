@extends('layouts.app')









@section('content')





    <div class="container">
        {{-- <a href="{{ route('registros.create') }}" class="btn btn-primary btn-sm mb-3 mt-3">Crear nuevo registro</a> --}}
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>NUMERO DE DOCUMENTO</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{ $registro->id}}</td>
                            <td>{{ $registro->name}}</td>
                            <td>{{ $registro->lastname }}</td>
                            <td>{{ $registro->n_documento }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-info">Detalles</a>
                                <a href="" class="btn btn-sm btn-warning">Editar</a>
                                <a href="" class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                            </td>

                          <!--  <td>{{-- $users->ficha --}}</td>
                           <td>{{-- $users->date_reg --}}</td-->
                        </tr>
                        {{-- <form action="{{ route('registross.destroy',$registros->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('registros.show',$registro->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                <a href="{{ route('registros.edit',$registro->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                            </form> --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
