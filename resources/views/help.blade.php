@extends('layouts.app')

@extends('layouts.head')

@section('title', 'Help | Suri')
@section('meta-title', 'Help | Suri')
@section('meta-desc', 'Need any help?')
@section('meta-key', 'learning, easy, reminders, sticky notes, flashcards, quizzes, students, school, college, university')

@extends('layouts.nav')

@section('guest')
<!------------------------
    Help
  ------------------------->
<section id="help">
  <div class="help-wrapper">
    
    <!-- Title -->
    <div class="help-title-wrapper">
      <h2 class="help-title">
        Help
      </h2>
      <div class="help-subtitle-wrapper">
        <h4 class="help-subtitle">
          Help? On a simple app like this? No way! Anyway...
        </h4>
      </div>
    </div><!-- help-title-wrapper -->
    
    <!-- FAQ -->
    <div class="help-faq-wrapper">
      
      <!-- 1 -->
      <div class="help-faq">
        <p class="help-faq-question">
          Q: What's on the <b>Dashboard</b>?
        </p>
        <p class="help-faq-answer">
          A: The <b>Dashboard</b> is where all your sticky notes are!
          Treat this like it's your school agenda, so you'll know when your next exam is! It's that easy!
        </p>
      </div>
      
      <!-- 2 -->
      <div class="help-faq">
        <p class="help-faq-question">
          Q: What can I do with <b>Flashcards</b>?
        </p>
        <p class="help-faq-answer">
          A: <b>Flashcards</b> are, well, flashcards! Put your questions on the left column and the answers on the right column!
          Now, activate your brain in study mode, and study!
        </p>
      </div>
      
      <!-- 3 -->
      <div class="help-faq">
        <p class="help-faq-question">
          Q: How do I change <b>Settings</b>?
        </p>
        <p class="help-faq-answer">
          A: Here, you only have <b>one</b> setting, and that's to change your profile picture!
          Just go to your <b>Dashboard</b>, select <b>User Settings</b> on the sidebar, and upload an image of your choice!
          Or if you're on the homepage or on mobile, select your name on the top right corner, and select <b>User Settings</b> on the dropdown!
        </p>
      </div>
      
      <!-- 4 -->
      <div class="help-faq">
        <p class="help-faq-question">
          Q: What technologies were used for this project?
        </p>
        <p class="help-faq-answer">
          A: Vue.js in the front-end, and Laravel in the back-end.
          For more information, click <a href="https://github.com/cdeluna95/suri" target="_blank">here</a>.
        </p>
      </div>
      
      <!-- 5 -->
      <div class="help-faq">
        <p class="help-faq-question">
          Q: Why was this project made?
        </p>
        <p class="help-faq-answer">
          A: Christan and his friends wanted to expand on the idea of Quizlet and its related applications.
          They tried to implement it in Ruby and Rails, but they barely made progress.
          A year or so later, Christan revived this idea and decided to use it for his undergraduate research class at Georgia Gwinnett College.
          This app constitutes only 50% of what they had in mind—he didn't want to be too ambitious, especially with only one person, or rather student, working on it.
        </p>
      </div>
      
    </div>
    
  </div>
</section><!-- help -->

@endsection

@extends('layouts.footer')
