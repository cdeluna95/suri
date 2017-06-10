@extends('layouts.app')

@extends('layouts.head')

@section('title', 'Dashboard | Suri')
@section('meta-title', 'Dashboard | Suri')
@section('meta-desc', 'Take a look what&#39;s up! Learn with all the tools available with Suri!')
@section('meta-key', 'learning, easy, reminders, sticky notes, flashcards, quizzes, students, school, college, university')

@extends('layouts.header')

@section('user')
<div id="home">
  
  <div id="dashboard">
    <div class="dashboard-wrapper">
      
      <!-- Brand -->
      <div class="dashboard-brand-wrapper">
        <a class="dashboard-brand" href="{{ url('/') }}">
          Suri
        </a>
      </div><!-- dashboard-brand-wrapper -->
      
      <!-- User -->
      <div class="dashboard-user-wrapper">
        <img class="dashboard-image img-circle" src="./images/uploads/{{ Auth::user()->avatar }}">
        <h5 class="dashboard-username">
          {{ Auth::user()->name }}
        </h5>
        <span class="dashboard-online" title="{{ Auth::user()->name }} is online"></span>
      </div><!-- dashboard-user-wrapper -->
      
      <!-- List -->
      <div class="dashboard-list-wrapper">
        <ul class="dashboard-ul">
          <li class="dashboard-li">
            <a class="dashboard-a active" href="{{ route('home') }}">
              <i class="fa fa-tachometer" aria-hidden="true"></i>
              <span class="dashboard-span">Dashboard</span>
            </a>
          </li>
          <li class="dashboard-li">
            <a class="dashboard-a" href="#">
              <i class="fa fa-list-alt" aria-hidden="true"></i>
              <span class="dashboard-span">Flashcards</span>
            </a>
          </li>
          <li class="dashboard-li">
            <a class="dashboard-a" href="#">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
              <span class="dashboard-span">Quizzes</span>
            </a>
          </li>
          <li class="dashboard-li">
            <a class="dashboard-a" href="#">
              <i class="fa fa-info" aria-hidden="true"></i>
              <span class="dashboard-span">About</span>
            </a>
          </li>
          <li class="dashboard-li">
            <a class="dashboard-a" href="#">
              <i class="fa fa-question-circle-o" aria-hidden="true"></i>
              <span class="dashboard-span">Help</span>
            </a>
          </li>
          <li class="dashboard-li">
            <a class="dashboard-a" href="{{ url('/settings') }}">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <span class="dashboard-span">User Settings</span>
            </a>
          </li>
          <li class="dashboard-li">
            <a class="dashboard-a" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              <span class="dashboard-span">Sign Out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </div><!-- dashboard-list-wrapper -->
      
    </div><!-- dashboard-wrapper -->
  </div><!-- dashboard -->
  
  <!------------------------
      Feed
    ------------------------->
  <div id="feed">
    <div class="reminders-wrapper">
      <reminders :notes="notes"></reminders>
    </div>
  </div><!-- feed -->
  
</div><!-- home -->
@endsection
