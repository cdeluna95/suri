@extends('layouts.app')

@extends('layouts.head')

@section('title', 'Reset password | Suri')
@section('meta-title', 'Reset password | Suri')
@section('meta-desc', 'Reset your password and take learning to the next level with Suri!')
@section('meta-key', 'learning, easy, reminders, flashcards, quizzes, students, school, college, university')

@extends('layouts.nav')

@section('guest')
<div id="auth">
  <div class="auth-wrapper">
    
    <div class="auth-title-wrapper">
      <h2 class="auth-title auth-reset">
        Reset password
      </h2>
    </div>
    
    <div class="auth-form-wrapper">
      @if (session('status'))
        <div class="auth-success">
          {{ session('status') }}
        </div>
      @endif
      
      <form role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        
        <!-- Email address -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input class="form-control form-reset" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email address" required>
          
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
          
        <!-- Submit -->
        <div class="form-group">
          <div class="form-submit">
            <input class="btn-submit btn-reset" type="submit" value="Send password reset link">
          </div>
        </div>
        
      </form>
    </div>
    
  </div>
</div>
@endsection
