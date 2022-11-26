@include('layouts.header')
@include('layouts.menu')
@section('header')

@endsection

<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Informacion de cita
            </h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Numero de cita : {{$cita->id}}</h5>
            <h5 class="card-title">Dia: {{$cita->fecha}}</h5>
            <h5 class="card-title">Hora entrada: {{$cita->entrada}}</h5>
            <h5 class="card-title">Hora salida: {{$cita->salida}}</h5>
            <h5 class="card-title">Total: {{$cita->entrada}}</h5>
            <a href="/citas"  class="btn btn-success mt-2">
                Regresar
            </a>
        </div>
    </div>
@include('layouts.footer')