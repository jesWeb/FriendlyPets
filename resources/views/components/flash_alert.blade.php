<!-- general -->
@if ( session('message') )        
    @component( 'components.alert' )
        @slot( 'class', 'success' )
        @slot( 'name', 'Éxito' )
        @slot( 'message', session('message') )
    @endcomponent
@endif
<!-- edicion -->
@if (session('message-edit'))
    @component( 'components.alert' )
        @slot( 'class', 'info' )
        @slot( 'name', 'Información' )
        @slot( 'message', session('message-edit') )
    @endcomponent
@endif
<!-- verificacion -->
@if (session('warning'))
    @component( 'components.alert' )
        @slot( 'class', 'warning' )
        @slot( 'name', 'Advertencia' )
        @slot( 'message', session('warning') )
    @endcomponent
@endif
<!-- precaucion -->
@if (session('danger'))
    @component( 'components.alert' )
        @slot( 'class', 'danger' )
        @slot( 'name', 'Advertencia' )
        @slot( 'message', session('danger') )
    @endcomponent
@endif
<!-- error -->
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close"data-dismiss="alert">x</button>
    <strong>{{$message}}</strong>
</div>
@endif