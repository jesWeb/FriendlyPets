@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Agregar Servicio</h1>
    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="d-flex justify-content-center aling-content-center">
            <div class="shadow card-body mt-4">
                <form action="{{route('servicios.store')}}" method="POST">
                    {{csrf_field()}}
                    <!--nombre  -->
                    <div class="mb-4">
                        <label for="text" class="form-label">Nombre </label>
                        <input type="text" class="form-control" name="name" placeholder="servicio" require id="">
                    </div>

                    <!-- costo-->
                   
                        <div class="mb-4">
                            <label for="text" class="form-label">Costo</label>
                            <input type="text" class="form-control" name="costo" placeholder="00.00 MXN" require id="">
                        </div>
                    
        
                    <!-- descripcion -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="" cols="15" rows="10"></textarea>
                    </div>

                    <div class="m-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
