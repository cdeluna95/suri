@extends('layouts.app')

@extends('layouts.head')

@section('title', 'Make learning easy | Suri')
@section('meta-title', 'Make learning easy | Suri')
@section('meta-desc', 'Take learning to the next level with Suri!')
@section('meta-key', 'learning, easy, reminders, sticky notes, flashcards, quizzes, students, school, college, university')

@extends('layouts.nav')

@section('guest')
<!------------------------
    Welcome
  ------------------------->
<main id="welcome">
  <div class="welcome-wrapper">
    
    <!-- Title -->
    <div class="suri-title-wrapper">
      <h1 class="suri-title">
        Make learning <span class="suri-span">easy</span>.
      </h1>
    </div><!-- suri-title-wrapper -->
    
    <!-- Subtitle -->
    <div class="suri-subtitle-wrapper">
      <h4 class="suri-subtitle">
        <span class="suri-span">Suri</span> facilitates your learning needs by offering you sticky notes, flashcards, quizzes, and more!
      </h4>
    </div><!-- suri-subtitle-wrapper -->
    
    <!-- Get started -->
    <div class="suri-started-wrapper">
      <a class="suri-started" href="{{ route('register') }}">
        Get started
      </a>
    </div><!-- suri-started-wrapper -->
    
  </div><!-- welcome-wrapper -->
</main><!-- welcome -->
@endsection

@extends('layouts.footer')
