<!--Mandamos a llamar plantillas-->
@include('layouts.header')
@include('layouts.container')
@include('layouts.footer')

<!--  -->
@section('header')
@endsection
<!--  -->
@section('container')
@endsection
<!--  -->
@section('footer')
@endsection

<!--  -->
@if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="nav-item nav-link">Home</a>
            @else
                <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 nav-item nav-link">Registrar</a>
                @endif
            @endauth
        @endif