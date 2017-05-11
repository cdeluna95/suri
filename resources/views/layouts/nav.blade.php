@section('nav')
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar mid-bar"></span>
        <span class="icon-bar bot-bar"></span>
      </button>
      
      <a class="navbar-brand" href="{{ url('/') }}">
        Suri
      </a>
    </div>
    
    <div id="app-navbar-collapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        
        @if (Auth::guest())
          <li>
            <a class="nav-about" href="#">About</a>
          </li>
          <li>
            <a class="nav-help" href="#">Help</a>
          </li>
          <li>
            <a class="nav-login" href="{{ route('login') }}">Sign In</a>
          </li>
          <li>
            <a class="nav-signup" href="{{ route('register') }}">Sign Up</a>
          </li>
          
        @else
          <li>
            <a class="nav-about" href="#">About</a>
          </li>
          <li>
            <a class="nav-help" href="#">Help</a>
          </li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }}
              <span class="caret"></span>
            </a>
            
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="#">
                  User Feed
                </a>
              </li>
              <li>
                <a href="#">
                  Flashcards
                </a>
              </li>
              <li>
                <a href="#">
                  Quizzes
                </a>
              </li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
          
        @endif
        
      </ul>
    </div>
    
  </div>
</nav>
@endsection