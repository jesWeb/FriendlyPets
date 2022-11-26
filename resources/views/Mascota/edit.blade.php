@include('layouts.header')
@include('layouts.menu')
@section('header')
@endsection
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Editar Mascotas</h1>
    </div>
    <!-- Begin Page Content -->
    <!-- Content Row -->
    <div class="d-flex justify-content-center aling-content-center">
    @include('components.flash_alerts')    
    <div class="shadow card-body mt-4">
            <form action="{{url('mascota/' .$Eddpet->id) }}" method="post">
                {{csrf_field()}}
                @method("PATCH")
                <!--nombre mascota/  -->
                <div class="mb-4">
                    <label for="text" class="form-label">Nombre </label>
                    <input type="text" class="form-control"   value="{{$Eddpet->name}}"  name="name" placeholder="My puchy " require id="">
                     <!-- alerta -->
                     @error('name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- edad -->
                <div class="form-group">
                    <div class="">
                        <label for="number" class="form-label">Edad</label>
                        <input type="number" class="form-control"  value="{{$Eddpet->edad}}" name="edad" require require id="">
                    </div>
                 <!-- alerta -->
                 @error('edad')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- sexo -->
                <div class="mb-3">
                    <label class="form-label" for="sexo">Sexo</label>
                    <div class="form-group">
                        <select class="form-control" name="sexo"  id="">
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
                        <select class="form-control"  name="tamaño" require id="">
                            <option value="{{$Eddpet->tamaño}}"></option>
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
                        <input type="text" class="form-control" require  value="{{$Eddpet->raza}}" name="raza" id="">
                    </label>
                     <!-- alerta -->
                     @error('raza')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- btn sumbit -->
                <div class="m-3">
                    <button type="submit" class="btn btn-primary" value="update">Guardar</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- End of Main Content -->
@include('layouts.footer')