@extends('layouts.app')

@extends('layouts.head')

@section('title', 'Sign up | Suri')
@section('meta-title', 'Sign up | Suri')
@section('meta-desc', 'Sign up and take learning to the next level with Suri!')
@section('meta-key', 'learning, easy, reminders, sticky notes, flashcards, quizzes, students, school, college, university')

@extends('layouts.nav')

@section('guest')
<!------------------------
    Auth
  ------------------------->
<section id="auth">
  <div class="auth-wrapper">
    
    <!-- Title -->
    <div class="auth-title-wrapper">
      <h2 class="auth-title auth-signup">
        Sign up
      </h2>
    </div>
    
    <!-- Form -->
    <div class="auth-form-wrapper">
      <form role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        
        <!-- Name -->
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <input class="form-control form-signup" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
          
          @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
        
        <!-- Email address -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input class="form-control form-signup" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email address" required>
          
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        
        <!-- Password -->
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input class="form-control form-signup" id="password" type="password" name="password" placeholder="Password" required>
          
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
        
        <!-- Confirm password -->
        <div class="form-group">
          <input class="form-control form-signup" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm password" required>
        </div>
        
        <!-- Submit -->
        <div class="form-group">
          <div class="form-submit">
            <input class="btn-submit btn-signup" type="submit" value="Sign up">
            <a class="btn-submit btn-signin" href="{{ route('login') }}">
              Sign in
            </a>
          </div>
        </div>
        
      </form>
    </div>
    
  </div><!-- auth-wrapper -->
</section><!-- auth -->
@endsection

@extends('layouts.footer')
