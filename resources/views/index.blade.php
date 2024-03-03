@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">CRUD Pasteleria</h2>
        </div>
        <div>
            <a href="" class="btn btn-primary">Añadir Orden</a>
        </div>
    </div>

    @if(Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('success')}}</strong><br><br>
            
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Orden</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
            @foreach($tasks as $task)
                <tr>
                    <td class="fw-bold">{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>
                    {{$task->due_date}}
                    </td>
                    <td>
                        <span class="badge bg-warning fs-6">{{$task->status}}</span>
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Editar</a>

                        <form action="" method="post" class="d-inline">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            
        </table>
        {{$tasks->links()}}
    </div>
</div>
@endsection