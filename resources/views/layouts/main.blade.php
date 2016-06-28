{{-- resources/views/layouts/main.blade.php --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.head_styles')
    @yield('styles')
  </head>
  <body>
    <header class="navbar navbar-default no-margin">
      {{-- Brand and toggle get grouped for better mobile display --}}
      <div class="navbar-header fixed-brand">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
          <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::to('/') }}">Colegio Laravel</a>        
      </div>
      {{-- navbar-header --}}
    </header>
    <main id="wrapper">
      {{-- Sidebar --}}
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li>
            <a href="{{ URL::to('profesor') }}">
              <span class="glyphicon glyphicon-user"></span>  Profesores
            </a>
          </li>
          <li>
            <a href="{{ URL::to('salon') }}">
              <span class="glyphicon glyphicon-th"></span>  Salones
            </a>
          </li>
          <li>
            <a href="{{ URL::to('asociaciones') }}">
              <span class="glyphicon glyphicon-asterisk"></span>  Asociaciones
            </a>
          </li>
          <li>
            <a href="{{ URL::to('cuenta/logout') }}">
              <span class="glyphicon glyphicon-off"></span>  Cerrar sesión
            </a>
          </li>
        </ul>
      </div>
      {{-- /#sidebar-wrapper --}}
      {{-- Page Content --}}
      <div id="page-content-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="messages">                              
                @include('alerts.alerts')
                @include('alerts.errors')
              </div>
              @yield('content')
            </div>
          </div>
        </div>
      </div>
      {{-- /#page-content-wrapper --}}
    </main>    
    {{-- /#wrapper --}}
    {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {{-- Include all compiled plugins (below), or include individual files as needed --}}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    @yield('scripts')
    {!! Html::script('assets/js/app.js') !!}
    {!! Html::script('assets/js/jquery.validate.min.js') !!}
    {!! Html::script('assets/js/additional-methods.min.js') !!}
    {!! Html::script('assets/js/selectize.js') !!}
    {!! Html::script('assets/js/profesor.js') !!}
    {!! Html::script('assets/js/salon.js') !!}
  </body>
</html>