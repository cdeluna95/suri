<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    @yield('head')
  </head>
  
  <body>
    
    @yield('nav')
    
    @yield('guest')
    
    <div id="suri-app">
      
      @yield('user')
        
    </div>
    
    @yield('footer')
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
