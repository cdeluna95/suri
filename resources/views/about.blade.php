@extends('layouts.app')

@extends('layouts.head')

@section('title', 'About | Suri')
@section('meta-title', 'About | Suri')
@section('meta-desc', 'What is Suri about?')
@section('meta-key', 'learning, easy, reminders, sticky notes, flashcards, quizzes, students, school, college, university')

@extends('layouts.nav')

@section('guest')
<!------------------------
    About
  ------------------------->
<section id="about">
  <div class="about-wrapper">
    
    <!-- Title -->
    <div class="about-title-wrapper">
      <h2 class="about-title">
        About
      </h2>
    </div><!-- about-title-wrapper -->
    
    <!-- Description -->
    <div class="about-desc-wrapper">
      <h4 class="about-desc">
        With <span class="about-desc-span">Suri</span>, we are able facilitate your learning needs and offer you sticky notes, flashcards, and more!
        What's it up for you? Let the learning begin!
      </h4>
    </div>
    
  </div>
</section><!-- about -->

<!------------------------
    Cheeb
  ------------------------->
<section id="cheeb">
  <div class="cheeb-wrapper">
    
    <!-- Title -->
    <div class="cheeb-title-wrapper">
      <h2 class="cheeb-title">
        Our Team
      </h2>
      <h4 class="cheeb-subtitle">
        Meet our lone wolf.
      </h4>
    </div>
    
    <!-- Image -->
    <div class="cheeb-image-wrapper">
      <img class="cheeb-image" src="../images/cheeb.jpg">
    </div>
    
    <!-- Description -->
    <div class="cheeb-desc-wrapper">
      <h4 class="cheeb-desc-name">
        Christan de Luna
      </h4>
      <h5 class="cheeb-desc-role">
        Full-Stack Developer
      </h5>
    </div>
    
  </div>
</section><!-- cheeb -->
@endsection

@extends('layouts.footer')
