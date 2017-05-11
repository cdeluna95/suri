@extends('layouts.app')

@extends('layouts.head')

@section('title', 'User Feed | Suri')
@section('meta-title', 'User Feed | Suri')
@section('meta-desc', 'Take a look what&#39;s up! Learn with all the tools available with Suri!')
@section('meta-key', 'learning, easy, reminders, flashcards, quizzes, students, school, college, university')

@extends('layouts.nav')

@section('user')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
