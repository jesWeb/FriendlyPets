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
            <h5 class="card-title">Nombre: {{$Mostraruser->name}}</h5>
            <h5 class="card-title">Direccion: {{$Mostraruser->sexo}}</h5>
            <h5 class="card-title">Correo: {{$Mostraruser->edad}}</h5>
            <h5 class="card-title">Telefono: {{$Mostraruser->telefono}}</h5>
            <h5 class="card-title">Email: {{$Mostraruser->email}}</h5>
            <a href="{{route('usuario.index')}}"  class="btn btn-success mt-2">
                Regresar
            </a>
        </div>
    </div>
@include('layouts.footer')