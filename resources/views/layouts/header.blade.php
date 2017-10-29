@section('header')
<!------------------------
    Header
  ------------------------->
<header id="header">
  <div class="header-wrapper">
    
    <!-- Burger -->
    <div class="header-burger-wrapper">
      <div class="header-burger">
        <span class="head-bar"></span>
        <span class="head-bar"></span>
        <span class="head-bar"></span>
      </div>
    </div>
    
    <!-- Title -->
    <div class="header-title-wrapper">
      <h2 class="header-title">
        Suri Dashboard
      </h2>
    </div>
    
    <!-- Add note -->
    <div class="header-add">
      <add-note @note-created="pushNote"></add-note>
    </div>
    
  </div><!-- header-wrapper -->
</header><!-- header -->
@endsection
