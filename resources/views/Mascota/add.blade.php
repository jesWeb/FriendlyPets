@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Alta de Mascotas</h1>
    </div>

    <!-- Begin Page Content -->

    <!-- Content Row -->
    <div class="d-flex justify-content-center aling-content-center">
        <div class="shadow card-body mt-4">
            <form action="{{route('mascota.store')}}" method="POST">
                {{csrf_field()}}
                <!--nombre  -->
                <div class="mb-4">
                    <label for="text" class="form-label">Nombre </label>
                    <input type="text" class="form-control" name="name" placeholder="jose sanchez " require id="">
                </div>

                <!-- edad -->
                <div class="form-group">
                    <div class="">
                        <label for="number" class="form-label">Edad</label>
                        <input type="number" class="form-control" name="edad" require require id="">
                    </div>
                </div>

                <!-- sexo -->
                <div class="mb-3">
                    <label class="form-label" for="sexo">Sexo</label>
                    <div class="form-group">
                        <select class="form-control" name="sexo" require id="">
                            <option value=""></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>

                <!-- tamaño -->
                <div class="mb-3">
                    <label class="form-label" for="tamaño">Tamaño</label>
                    <div class="form-group">
                        <select class="form-control" name="tamaño" require id="">
                            <option value=""></option>
                            <option value="chico">Chico</option>
                            <option value="mediano">Mediano</option>
                            <option value="grande">Grande</option>

                        </select>
                    </div>
                </div>

                <!-- raza -->
                <div class="mb-3">
                    <label for="text" class="form-label">
                        Raza
                        <input type="text" class="form-control" require name="raza" id="">
                    </label>
                </div>




                <div class="m-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- End of Main Content -->

@include('layouts.footer')
