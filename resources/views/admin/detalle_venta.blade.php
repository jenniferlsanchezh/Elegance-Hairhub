@extends('admin.base')
<base href="/">
@section('title', 'Editar Venta | H-E')
@section('content')
<div class="d-flex mt-3">
    <form action="{{ url('/admin/sellings/edit/'.$venta->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <label for="valor">Valor</label><br>
        <input type="number" id="valor" name="Total_Venta" value="{{ $venta->Total_Venta }}"><br>
        <label for="vendedor">Id Del Vendedor:</label><br>
        <input type="number" id="vendedor" name="Id_Vendedor" value="{{ $venta->Id_Vendedor }}"><br>
        <label for="cliente">Id Del Cliente:</label><br>
        <input type="number" id="cliente" name="Id_Cliente" value="{{ $venta->Id_Cliente }}"><br>
        <label for="hora">Hora de la venta:</label><br>
        <input type="date" id="hora" name="Hora_Venta" value="{{ $venta->Hora_Venta }}"><br><br>
        <button class="btn btn-outline-primary">Modificar Venta</button>
    </form>
</div>
@endsection