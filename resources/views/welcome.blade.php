@extends('layouts.app')

@extends('layouts.head')

@section('title', 'Make learning easy | Suri')
@section('meta-title', 'Make learning easy | Suri')
@section('meta-desc', 'Take learning to the next level with Suri!')
@section('meta-key', 'learning, easy, reminders, flashcards, quizzes, students, school, college, university')

@extends('layouts.nav')

@section('guest')
<div id="welcome">
  <div class="welcome-wrapper">
    
    <!-- Title -->
    <div class="suri-title-wrapper">
      <h1 class="suri-title">
        Make learning <span class="suri-span">easy</span>.
      </h1>
    </div>
    
    <!-- Subtitle -->
    <div class="suri-subtitle-wrapper">
      <h4 class="suri-subtitle">
        <span class="suri-span">Suri</span> facilitates your learning needs by offering you custom bulletin boards, flashcards, quizzes, and more!
      </h4>
    </div>
    
    <!-- Get started -->
    <div class="suri-started-wrapper">
      <a class="suri-started" href="{{ route('register') }}">
        Get started
      </a>
    </div>
    
  </div>
</div>
@endsection

@extends('layouts.footer')
