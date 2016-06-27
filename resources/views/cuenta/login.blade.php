{{-- resources/views/account/login.blade.php --}}
@extends('layouts.landing')
@section('title', 'Iniciar sesión')
@section('content')
<div class="row">
  <div id="form_login" class="col-xs-12 col-sm-12 col-lg-6 col-lg-offset-3 well">
    <div class="messages">
      @include('alerts.errors')  
    </div>    
    {!! Form::open(['route' => "cuenta.store", 'method' => 'POST']) !!}
      <div class="form-group">        
        {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Correo electrónico', 'autofocus']) !!}
      </div>
      <div class="form-group">        
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
      </div>
      <div class="checkbox">
        <label>
          {!! Form::checkbox('remember', 'value'); !!} Recordarme
        </label>
      </div>
      <button type="submit" class="btn btn-info">Acceder</button>
    {!! Form::close() !!}
  </div>
</div>
@stop