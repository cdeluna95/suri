@extends('layouts.app')

@extends('layouts.head')

@section('title', 'User Settings | Suri')
@section('meta-title', 'User Settings | Suri')
@section('meta-desc', 'Change your avatar and smile!')
@section('meta-key', 'learning, easy, reminders, sticky notes, flashcards, quizzes, students, school, college, university')

@extends('layouts.nav')

@section('settings')
<!------------------------
    Settings
  ------------------------->
<section id="settings">
  <div class="settings-wrapper">
    <div class="settings-card">
      
      <!-- Header -->
      <div class="settings-header"></div>
      
      <!-- Image -->
      <div class="settings-image-wrapper">
        <img class="settings-image img-circle" src="./images/uploads/{{ $user->avatar }}">
      </div><!-- settings-image-wrapper -->
      
      <!-- Name -->
      <div class="settings-name-wrapper">
        <h2 class="settings-name">
          {{ $user->name }}
        </h2>
        <p class="settings-subname">
          User
        </p>
      </div><!-- settings-name-wrapper -->
      
      <!-- Upload -->
      <form class="form-group" enctype="multipart/form-data" method="POST" action="/settings">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input id="file" class="file" type="file" name="avatar" data-multiple-caption="{count} files selected" multiple>
        <label for="file" class="btn btn-file">
          <i class="fa fa-picture-o" aria-hidden="true"></i>
          <span class="file-caption">Choose a file...</span>
        </label>
        <input class="btn btn-submit" type="submit">
      </form><!-- form-group -->
      
    </div><!-- settings-card -->
  </div><!-- settings-wrapper -->
</section><!-- settings -->
@endsection

@extends('layouts.footer')
