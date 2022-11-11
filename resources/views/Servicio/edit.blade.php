@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar Servicio</h1>
    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="d-flex justify-content-center aling-content-center">
            <div class="shadow card-body mt-4">
                <form action="{{url('servicio/' .$Eddserv->id) }}" method="post">
                    {{csrf_field()}}
                    @method("PATCH")
                    <!--nombre  -->
                    <div class="mb-4">
                        <label for="text" class="form-label">Nombre </label>
                        <input type="text" class="form-control" value="{{$Eddserv->name}}"  name="name" placeholder="servicio" require id="">
                    </div>
                    <!-- costo-->
                        <div class="mb-4">
                            <label for="text" class="form-label">Costo</label>
                            <input type="text" class="form-control" value="{{$Eddserv->costo}}" name="costo" placeholder="00.00 MXN" require id="">
                        </div>
                    <!-- descripcion -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea class="form-control" value="{{$Eddserv->descripcion}}"   name="descripcion" id="" cols="15" rows="10"></textarea>
                    </div>
                    <!-- btn enviar -->
                    <div class="m-3">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('layouts.footer')
