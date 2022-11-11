@include('layouts.header')
@include('layouts.menu')
@section('header')

@endsection

<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Informacion de clientes
            </h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Nombre: {{$service->name}}</h5>
            <h5 class="card-title">Costo: {{$service->costo}}</h5>
            <h5 class="card-title">Descripcion: {{$service->descripcion}}</h5>
            <a href=s"/servicio"  class="btn btn-success mt-2">
                Regresar
            </a>
        </div>
    </div>
@include('layouts.footer')