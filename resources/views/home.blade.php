@extends('layouts.app')

@extends('layouts.head')

@section('title', 'User Feed | Suri')
@section('meta-title', 'User Feed | Suri')
@section('meta-desc', 'Take a look what&#39;s up! Learn with all the tools available with Suri!')
@section('meta-key', 'learning, easy, reminders, flashcards, quizzes, students, school, college, university')

@extends('layouts.nav')

@section('user')
<div id="home">

  <!------------------------
    Dashboard
    ------------------------->
  <div id="dashboard">
    <div class="dashboard-wrapper">
      <div class="dashboard-list">
        <div class="dashboard-title-wrapper">
          <h2 class="dashboard-title">
            Dashboard
          </h2>
        </div>
        <div class="dashboard-list-wrapper">
          <a class="dashboard-a" href="{{ route('home') }}">
            <i class="fa fa-tasks" aria-hidden="true"></i>
            User Feed
          </a>
        </div>
        <div class="dashboard-list-wrapper">
          <a class="dashboard-a" href="#">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            Flashcards
            </a>
        </div>
        <div class="dashboard-list-wrapper">
          <a class="dashboard-a" href="#">
            <i class="fa fa-question-circle-o" aria-hidden="true"></i>
            Quizzes
          </a>
        </div>
      </div><!-- dashboard-list -->
    </div><!-- dashboard-wrapper -->
  </div><!-- dashboard -->
  
  <!------------------------
    Feed
    ------------------------->
  <div id="feed">
    <!-- Dashboard burger -->
    <!--<div class="dashboard-burger-wrapper">-->
    <!--  <div class="dashboard-burger">-->
    <!--    <span class="dash-bar"></span>-->
    <!--    <span class="dash-bar"></span>-->
    <!--    <span class="dash-bar"></span>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- Bulletin -->
    <div class="reminders-wrapper">
      <add @note-created="pushNote"></add>
      <reminders :notes="notes"></reminders>
    </div>
  </div><!-- feed -->
  
</div><!-- home -->
@endsection
