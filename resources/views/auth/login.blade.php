@extends('layouts.app')

@extends('layouts.head')

@section('title', 'Sign in | Suri')
@section('meta-title', 'Sign in | Suri')
@section('meta-desc', 'Sign in and take learning to the next level with Suri!')
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
      <h2 class="auth-title auth-signin">
        Sign in
      </h2>
    </div>
    
    <!-- Form -->
    <div class="auth-form-wrapper">
      <form role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        
        <!-- Email address -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input class="form-control form-signin" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email address" required autofocus>
          
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        
        <!-- Password -->
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input class="form-control form-signin" id="password" type="password" name="password" placeholder="Password" required>
          
          @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
        </div>
        
        <!-- Session -->
        <div class="form-group">
          <div class="checkbox">
            <label class="checkbox-label">
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
            </label>
          </div>
          
          <div class="form-forgot">
            <a class="btn-forgot" href="{{ route('password.request') }}">
              Forgot password?
            </a>
          </div>
        </div>
        
        <!-- Submit -->
        <div class="form-group">
          <div class="form-submit">
            <input class="btn-submit btn-signin" type="submit" value="Sign in">
            <a class="btn-submit btn-signup" href="{{ route('register') }}">
              Sign up
            </a>
          </div>
        </div>
        
      </form>
    </div>
    
  </div><!-- auth-wrapper -->
</section><!-- auth -->
@endsection

@extends('layouts.footer')
