@section('header')
<!------------------------
    Header
  ------------------------->
<header id="header">
  <div class="header-wrapper">
    
    <div class="header-burger-wrapper">
      <div class="header-burger">
        <span class="head-bar"></span>
        <span class="head-bar"></span>
        <span class="head-bar"></span>
      </div>
    </div>
    
    <div class="header-title-wrapper">
      <h2 class="header-title">
        Suri Dashboard
      </h2>
    </div>
    
    <div class="header-add">
      <add @note-created="pushNote"></add>
    </div>
    
  </div><!-- header-wrapper -->
</header><!-- header -->
@endsection
