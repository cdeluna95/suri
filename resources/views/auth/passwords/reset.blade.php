@extends('layouts.app')

@extends('layouts.head')

@section('title', 'Reset password | Suri')
@section('meta-title', 'Reset password | Suri')
@section('meta-desc', 'Reset your password and take learning to the next level with Suri!')
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
      <h2 class="auth-title auth-reset">
        Reset password
      </h2>
    </div>
    
    <!-- Form -->
    <div class="auth-form-wrapper">
      @if (session('status'))
        <div class="auth-success">
          {{ session('status') }}
        </div>
      @endif
      
      <form role="form" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
        
        <input type="hidden" name="token" value="{{ $token }}">
        
        <!-- Email address -->
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input  class="form-control form-reset" id="email" type="email" name="email" value="{{ $email or old('email') }}" placeholder="Email address" required autofocus>
          
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        
        <!-- Password -->
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input class="form-control form-reset" id="password" type="password" name="password" placeholder="Password" required>
          
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
        
        <!-- Confirm password -->
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <input class="form-control form-reset" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm password" required>
          
          @if ($errors->has('password_confirmation'))
            <span class="help-block">
              <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
          @endif
        </div>
        
        <!-- Submit -->
        <div class="form-group">
          <div class="form-submit">
            <input class="btn-submit btn-reset" type="submit" value="Reset password">
          </div>
        </div>
        
      </form>
    </div>
    
  </div><!-- auth-wrapper -->
</section><!-- auth -->
@endsection

@extends('layouts.footer')
