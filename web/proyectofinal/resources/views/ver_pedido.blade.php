@extends('layouts/master')
@section('contenido')
<div class="row mt-5">
    <div class="col-12 col-md-12 col-lg-6 mx-auto">
        <table class="table table-hower table-bordered table-striped table-responsive">
            <thead class="bg-info">
                <tr class="table-primary">
                    <td>Cliente</td>
                    <td>Fecha</td>
                    <td>Producto Comprado</td>
                    <td>Tipo</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody id="tbody-cliente">

            </tbody>
        </table>
    </div>
</div>
@endsection