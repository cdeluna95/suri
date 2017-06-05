<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    @yield('head')
  </head>
  
  <body>
    
    @yield('nav')
    
    @yield('guest')
    
    <!------------------------
      Suri App
    ------------------------->
    <section id="suri-app">
      
      @yield('header')
      
      @yield('user')
        
    </section><!-- suri-app -->
    
    @yield('footer')
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    
  </body>
</html>
