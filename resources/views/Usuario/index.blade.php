@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
    </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-12 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro de eliminar este usuario?
                                </h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Información del usuario</div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-primary" href="/usuario">Continuar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- alertas lllamado -->
                    @include('components.flash_alert')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">lista Usuarios</h3>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-primary" href="{{route('usuario.create')}}"><i
                                        class="fa-solid fa-layer-group"></i></i></a>
                            </div>
                        </div>
                        <!-- consulta laravel eloquente  -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Sexo</th>
                                            <th>Edad</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Direccion</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- consulta -->
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->sexo}}</td>
                                            <td>{{$user->edad}}</td>
                                            <td>{{$user->telefono}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->direccion}}</td>
                                            <!-- botones  -->
                                            <td>
                                                <div class="row col-12">
                                                    <div class="col-4">
                                                        <a class="btn btn-success m-3"
                                                            href="{{route('usuario.show',['usuario'=>$user->id])}}"><i
                                                                class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-warning m-3"
                                                            href="{{route('usuario.edit',['usuario'=>$user->id])}}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <form action="usuario/{{$user->id}}" method="post">
                                                            {!! csrf_field() !!}
                                                            @method("delete")

                                                            <button class="btn btn-danger m-3" type="submit"><i
                                                                    class="fa-solid fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->
@include('layouts.footer')
