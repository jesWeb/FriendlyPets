@if ( session('message') )        
    @component( 'components.alert' )
        @slot( 'class', 'success' )
        @slot( 'name', 'usuario creado' )
        @slot( 'message', session('message') )
    @endcomponent
@endif
@if (session('messagedit'))
    @component( 'components.alert' )
        @slot( 'class', 'primary' )
        @slot( 'name', 'Información' )
        @slot( 'message', session('messagedit') )
    @endcomponent
@endif

@if (session('eliminacion'))
    @component( 'components.alert' )
        @slot( 'class', 'warning' )
        @slot( 'name', 'Se ha eliminado' )
        @slot( 'message', session('eliminacion') )
    @endcomponent
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close"data-dismiss="alert">x</button>
    <strong>{{$message}}</strong>
</div>
@endif