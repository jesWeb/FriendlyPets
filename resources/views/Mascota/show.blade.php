@include('layouts.header')
@include('layouts.menu')
@section('header')
@endsection
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Informacion de mascota
            </h6>
        </div>
        <div class="card-body">
            <h5 class="card-title">Nombre: {{$mascot->name}}</h5>
            <h5 class="card-title">Sexo: {{$mascot->sexo}}</h5>
            <h5 class="card-title">Edad: {{$mascot->edad}}</h5>
            <h5 class="card-title">Tamaño: {{$mascot->tamaño}}</h5>
            <h5 class="card-title">Raza: {{$mascot->raza}}</h5>
            <a href="{{route('mascota.index')}}"  class="btn btn-success mt-2">
                Regresar
            </a>
        </div>
    </div>
@include('layouts.footer')