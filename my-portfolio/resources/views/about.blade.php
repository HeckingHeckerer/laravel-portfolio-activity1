@extends('layout')
@section('title', 'About Me')
@section('content')
<h1>About Me</h1>
<div style="margin-top: 2rem;">
<h2 style="color: #3498db;">{{ $name }}</h2>
<p style="margin-top: 1rem; font-size: 1.1rem;">
<strong>Course:</strong> {{ $course }}
</p>
<p style="margin-top: 0.5rem; font-size: 1.1rem;">
<strong>University:</strong> {{ $university }}
</p>
<p style="margin-top: 2rem; line-height: 1.8;">
I am a passionate student currently learning web development with Laravel.
my other focus is on game development, my goal is to become a full time game developer
I enjoy building games, either pc or mobile, solving problems that i encounter.
</p>
</div>
@endsection