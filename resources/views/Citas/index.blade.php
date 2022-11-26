@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Agenda</h1>
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
                                <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro de eliminar este servicio?
                                </h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Información de Citas </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-primary" href="/citas">Continuar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- alerts crud -->
                    @include('components.flash_alerts') 
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Lista De Citas</h3>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-primary" href="{{route('checking.create')}}"><i
                                        class="fa-solid fa-layer-group"></i></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Entrada</th>
                                            <th>Salida</th>
                                            <th>Total</th>
                                            <!-- <th>Operaciones</th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <!-- consulta -->
                                        @foreach($citas as $cita)
                                        <tr>
                                            <td>{{$cita->id}}</td>
                                            <td>{{$cita->fecha}}</td>
                                            <td>{{$cita->entrada}}</td>
                                            <td>{{$cita->salida}}</td>
                                            <td>{{$cita->total}}</td>
                                           
                                            <!-- botones  -->
                                            <td>
                                                <div class="row col-12">
                                                    <div class="col-4">
                                                        <a class="btn btn-success m-3"
                                                            href="{{route('Citas.show',['checking' => $cita->id])}}"><i
                                                                class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-warning m-3"
                                                            href="{{route('Citas.edit',['checking' => $cita->id])}}"><i
                                                                class="fa-solid fa-pen-to-square"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <form action="citas/{{$cita->id}}" method="post">
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
    <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@include('layouts.footer')