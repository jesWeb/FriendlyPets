@include('layouts.header')
@include('layouts.menu')

@section('header')

@endsection

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Usuario</h1>
    </div>

    <!-- Content Row -->
    <div class="d-flex justify-content-center aling-content-center">
        <div class="shadow card-body mt-4">
            <!-- editar  usuario -->
            <form action="{{url('usuario/' .$EddUser->id) }}" method="post">
                {{csrf_field()}}
                @method("PATCH")
                <!--nombre  -->
                <div class="mb-4">
                    <label for="text" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" name="name" placeholder="jose sanchez "  value="{{$EddUser->name}}" require id="">
                </div>
                <!-- dirrecion -->
                <div class="mb-4">
                    <label for="text" class="form-label">Direccion</label>
                    <input type="text" name="direccion" class="form-control"  value="{{$EddUser->direccion}}"require placeholder="cuajimalpa" id="">
                </div>
                <!-- edad -->
                <div class="form-group">
                    <div class="">
                        <label for="number" class="form-label">Edad</label>
                        <input type="number" class="form-control" name="edad"  value="{{$EddUser->edad}}"require require id="">

                    </div>
                </div>

                <!-- sexo -->
                <div class="mb-3">
                    <label class="form-label" for="sexo">Sexo</label>
                    <div class="form-group">
                        <select class="form-control" name="sexo" value="{{$EddUser->sexo}}" require id="">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="number">Telefono;</label>
                    <input type="number" name="telefono" class="form-control"  value="{{$EddUser->telefono}}"require placeholder="+52" id="">
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">Correo electronico</label>
                    <input type="email" class="form-control" name="email" require value="{{$EddUser->email}}" placeholder="@gmail" id="">
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">contraseña</label>
                    <input type="password" class="form-control" name="password" value="{{$EddUser->password}}" require id="">
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
