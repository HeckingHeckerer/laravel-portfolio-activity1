@extends('layout')
@section('title', 'My Projects')
@section('content')
<h1>My Projects</h1>
<div style="margin-top: 2rem;">

@foreach($projects as $project)
<div style=" background: url('{{ asset($project['image']) }}') no-repeat center center;
background-size: cover;
padding: 1.5rem; 
margin-bottom: 1rem;
border-radius: 5px;">
<h3 style="color: #ffffffff;">{{ $project['title'] }}</h3>
<p style="margin-top: 0.5rem; color: #ffffffff;">{{
$project['description'] }}</p>

</div>
@endforeach
<!-- <h1>My Artworks</h1> -->
</div>
@endsection

