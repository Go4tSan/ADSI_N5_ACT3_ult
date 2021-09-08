@extends('layouts.app')









@section('content')



<header>


    <!-- Background image -->
    <div
      class="p-5 text-center bg-image"
      style="
        background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/bcd42d10-94a0-4474-9ee2-0b0dcf350ae5/dene5dt-d4d04b7c-2114-48db-b5ae-da65529405da.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2JjZDQyZDEwLTk0YTAtNDQ3NC05ZWUyLTBiMGRjZjM1MGFlNVwvZGVuZTVkdC1kNGQwNGI3Yy0yMTE0LTQ4ZGItYjVhZS1kYTY1NTI5NDA1ZGEucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.Ws_fImKOVcegQksZ3DpLUJu_rpknYABffh-1U3Lek88');
        height: 400px;
      "
    >
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Super mega codigo sacado de stack-overflow asies</h1>

          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>

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
    <footer class="text-center text-white fixed-bottom" style="background-color: #bdb7b7;">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgb(9, 5, 5);">
          © 2021 Copyright:
          <a class="text-white" href="">CTM_GoatSan</a>
        </div>
        <!-- Copyright -->
      </footer>
@endsection
