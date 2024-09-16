@extends('admin.base')
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/invitados.css">
<base href="/">
@section('title', 'Admin | Elegance Hairhub')
@section('content')
<div class="d-flex">
    <h1 class="mx-auto text-center mt-3">Ventas</h1>
    <a href="/admin/sellings/create" class="mt-3">
        <button class="h-100 col-12 btn btn-outline-primary">Crear nueva venta</button>
    </a>
</div>
<table class="mx-auto mt-5 text-center w-75">
    <tr>
        <th>Id de la venta</th>
        <th>Valor de la venta</th>
        <th>Id Vendedor</th>
        <th>Id Cliente</th>
        <th>Fecha de la venta</th>
        <th>Acciones</th>
    </tr>
    @foreach($ventas as $venta)
    <tr>
        <td>{{ $venta->id }}</td>
        <td>{{ $venta->Total_Venta }}</td>
        <td>{{ $venta->Id_Vendedor }}</td>
        <td>{{ $venta->Id_Cliente }}</td>
        <td>{{ $venta->Hora_Venta }}</td>
        <td class="d-flex">
            <form action="{{ url('/admin/sellings/destroy/'.$venta->id ) }}" method="POST" class="mx-auto">
                @csrf
                {{ method_field('DELETE') }}
                <button class="btn btn-outline-danger"
                    onclick="return confirm('Estás seguro de querer borrar esta venta?')">Borrar</button>
            </form>
            <a href="{{ url('/admin/sellings/edit/'.$venta->id) }}" class="h-100">
                <button class="btn btn-outline-warning mx-auto h-50">Editar</button>
            </a>
            <a href="{{ url('/admin/sellings/'.$venta->id) }}" class="h-100">
                <button class="btn btn-outline-success mx-auto h-50">Ver</button>
            </a>
        </td>
    </tr>

    @endforeach
</table>
@endsection