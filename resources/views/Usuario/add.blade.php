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
    @include('components.flash_alerts') 
        <div class="shadow card-body mt-4">
            <form action="{{route('usuario.store')}}" ectype="multipart/form-data" method="POST">
                <!--  -->
                {{csrf_field()}}
               
                <!--nombre  -->
                <div class="mb-4">
                    <label for="text" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre" require id="">
                    <!-- alerta -->
                    @error('name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- dirrecion -->
                <div class="mb-4">
                    <label for="text" class="form-label">Direccion</label>
                    <input type="text" name="direccion" class="form-control" require placeholder="ciudad" id="">
                    <!-- alerta -->
                    @error('dirreccion')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- edad -->
                <div class="form-group">
                    <div class="">
                        <label for="number" class="form-label">Edad</label>
                        <input type="number" class="form-control" name="edad" require id="">
                     <!-- alerta -->
                        @error('edad')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <!-- sexo -->
                <div class="mb-3">
                    <label class="form-label" for="sexo">Sexo</label>
                    <div class="form-group">
                        <select class="form-control" name="sexo" require id="">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>
                <!-- telefono -->
                <div class="mb-4">
                    <label for="number">Telefono;</label>
                    <input type="number" name="telefono" class="form-control" require placeholder="+52" id="">
                 <!-- alerta -->
                 @error('telefono')
                        <small class="form-text text-danger">{{$message}}</small>
                 @enderror
                </div>
                <!-- email -->
                <div class="mb-4">
                    <label for="email" class="form-label">Correo electronico</label>
                    <input type="email" class="form-control" name="email" require placeholder="@gmail" id="">
                 <!-- alerta -->
                 @error('email')
                        <small class="form-text text-danger">{{$message}}</small>
                @enderror
                </div>
                <!-- password -->
                <div class="mb-4">
                    <label for="password" class="form-label">contrase??a</label>
                    <input type="password" class="form-control" name="password" require id="">
                 <!-- alerta -->
                 @error('password')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                </div>
                
                <!-- imagen -->
                <div class="mb-4">
                    <input type="file" class="form-label"  name="imagenUser" id="">
                </div>

                <!-- btn enviar -->
                <div class="row justify-content-center">
                     <div class="">
                     <button type="submit" class="btn btn-success m-3" value="save">Guadar</button>
                     <a class="btn btn-danger m-3"  href="/usuario" >Cancelar</a>
                     </div>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('layouts.footer')