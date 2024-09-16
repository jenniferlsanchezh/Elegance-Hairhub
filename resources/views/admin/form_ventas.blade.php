@extends('admin.base')
<base href="/">
@section('title', 'Crear Nueva Venta | E-H')
@section('content')
<div class="d-flex mt-3">
    <form action="{{ url('/admin/sellings/store') }}" method="POST" class="mx-auto">
        @csrf
        <label for="valor">Valor</label><br>
        <input type="number" id="valor" name="Total_Venta"><br>
        <label for="vendedor">Id Del Vendedor:</label><br>
        <input type="number" id="vendedor" name="Id_Vendedor"><br>
        <label for="cliente">Id Del Cliente:</label><br>
        <input type="number" id="cliente" name="Id_Cliente"><br>
        <label for="hora">Hora de la venta:</label><br>
        <input type="date" id="hora" name="Hora_Venta"><br><br>
        <button class="btn btn-outline-primary">Crear Nueva Venta</button>
    </form>
</div>
@endsection