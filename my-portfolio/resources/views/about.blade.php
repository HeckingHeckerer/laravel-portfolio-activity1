@extends('layout')
@section('title', 'About Me')
@section('content')


<div class="about-center" style="margin-top: 2rem;">
<h1>About Me</h1>
<div style="margin-top: 2rem; text-align: center;">
    <img src="{{ asset('images/seigvard.jpg') }}" 
         alt="Profile Picture" 
         style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%; border: 4px solid #fff4d1;">
</div>
<div style="margin-top: 2rem;">
<h2 style="color: #fff4d1ff;">{{ $name }}</h2>
<p style="margin-top: 1rem; font-size: 1.1rem; color:rgba(255, 255, 255, 1);">
<strong>Course:</strong> {{ $course }}
</p>
<p style="margin-top: 0.5rem; font-size: 1.1rem; color:rgba(255, 255, 255, 1);">
<strong>University:</strong> {{ $university }}
</p>
<p style="margin-top: 0.5rem; font-size: 1.1rem; color:rgba(255, 255, 255, 1);">
<strong>Skills & Hobbies:</strong> {{ $hobbies }}
</p>
<p style="margin-top: 2rem; line-height: 1.8; color:rgba(255, 255, 255, 1);">
I am a passionate student currently learning web development with Laravel.
my other focus is on game development, My preferred game engine to use is Godot, my goal is to become a full time game developer
I enjoy building games, either pc or mobile, solving problems that i encounter.
</p>
</div>

</div>
@endsection