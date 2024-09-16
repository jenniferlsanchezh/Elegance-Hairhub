@extends('admin.base')
<base href="/">
@section('title', 'Ver venta | E-H')
@section('content')
<div class="d-flex mt-3">
    <form class="mx-auto">
        <label for="valor">Valor</label><br>
        <input type="number" id="valor" name="Total_Venta" value="{{ $venta->Total_Venta }}" readonly><br>
        <label for="vendedor">Id Del Vendedor:</label><br>
        <input type="number" id="vendedor" name="Id_Vendedor" value="{{ $venta->Id_Vendedor }}" readonly><br>
        <label for="cliente">Id Del Cliente:</label><br>
        <input type="number" id="cliente" name="Id_Cliente" value="{{ $venta->Id_Cliente }}" readonly><br>
        <label for="hora">Hora de la venta:</label><br>
        <h5>{{ $venta->Hora_Venta }}</h5>
    </form>
</div>
@endsection