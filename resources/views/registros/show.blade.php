@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>



                    </thead>
                </table>
                <a href="{{ route('registros.index') }}" class="btn btn-info btn-sm">Volver al inicio</a>
                <a href="" class="btn btn-warning btn-sm">Editar registros</a>
            </div>
        </div>
    </div>

@endsection
