{{-- resources/views/layouts/landing.blade.php --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.head_styles')
  </head>
  <body>
    <div class="site-wrapper">
      <header class="navbar navbar-default no-margin">
        {{-- Brand and toggle get grouped for better mobile display --}}
        <div class="container">
          <div class="navbar-header fixed-brand">
            <a class="navbar-brand" href="{{ URL::to('/') }}">Colegio Laravel</a>
          </div>
          {{-- navbar-header --}}
        </div>
      </header>
      <main class="home">
        <div class="container">
          @yield('content')
        </div>     
      </main>
      @include('layouts.footer')  
    </div>    		
    {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {{-- Include all compiled plugins (below), or include individual files as needed --}}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
  </body>
</html>