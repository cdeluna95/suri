<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    @yield('head')
  </head>
  
  <body>
    <div id="suri-app">
      
      @yield('user')
        
    </div>
    
    @yield('nav')
    
    @yield('guest')
    
    @yield('footer')
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
