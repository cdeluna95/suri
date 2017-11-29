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
    
    <!-- Add note or set -->
    <div class="header-add">
      <add-note @note-created="pushNote" v-if="$route.path === '/reminders'"></add-note>
      <add-set @set-created="pushSet" v-if="$route.path === '/sets'"></add-set>
      <add-flashcard @flashcard-created="pushFlashcard" v-if="$route.path === '/sets/:set_id/flashcards/:flashcard_id'"></add-flashcard>
    </div>
    
  </div><!-- header-wrapper -->
</header><!-- header -->
@endsection
