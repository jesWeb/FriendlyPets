@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Agregar Cita</h1>
    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="d-flex justify-content-center aling-content-center">
            @include('components.flash_alerts')
            <div class="shadow card-body mt-4">
                <form action="{{route('checking.store')}}" method="POST">

                    {{csrf_field()}}
                    <!--nombre  -->
                    <div class="mb-4">
                        <label for="fecha" class="form-label">Dia de cita </label>
                        <input type="date" name="fecha" class="form-control" id="">

                        <!-- alerta -->
                        @error('fecha')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <!-- entrada -->
                    <div class="mb-4">
                        <label for="entrada" class="form-label"></label>
                        <input type="datetime" name="entrada" class="form-control" id="">
                        <!-- alerta -->
                        @error('entrada')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        
                    </div>
                    <!-- salida -->
                    <div class="mb-4">
                        <label for="salida" class="form-label"></label>
                        <input type="datetime" name="salida" class="form-control" id="">
                        <!-- alerta -->
                        @error('salida')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        
                    </div>

                    <!-- costo-->
                    <div class="mb-4">
                        <label for="total" class="form-label">Total</label>
                        <input type="text" class="form-control" name="total" placeholder="00.00 MXN" require id="">
                        <!-- alerta -->
                        @error('total')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <!-- btn -->
                    <div class="m-3">
                        <button type="submit" class="btn btn-primary">enviar </button>
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
