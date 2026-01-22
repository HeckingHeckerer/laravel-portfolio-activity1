<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
return view('home');
})->name('home');

Route::get('/about', function () {
$name = 'Victory Kyle N. Villarino'; // Replace with YOUR name
$course = 'Bachelor of Science in Information Technology';
$university = 'Central Mindanao University'; // Replace with YOUR university
$hobbies = '2D & 3D Digital Art, Working Out, Game development'
return view('about', [
'name' => $name,
'course' => $course,
'university' => $university
'hobbies' => $hobbies
]);
})->name('about');

Route::get('/projects', function () {
$projects = [
['Platformer Game' => 'Project 1', 'A 2d platformer game i made using godot' => 'My first Game project'],
['Rock Paper Warrior' => 'Project 2', 'a 2d hack & slash game i made in the godot game engine' => 'Second game project'],
['One Path One Fate' => 'Project 3', 'a top-down 3d turn-based game' => '3rd game project i made'],
];
return view('projects', ['projects' => $projects]);
})->name('projects');

Route::get('/contact', function () {
$email = 'pewdiepew87@gmail.com'; // Replace with YOUR email
$phone = '+63 123 456 789'; // Replace with YOUR phone

return view('contact', [
'email' => $email,
'phone' => $phone
]);
})->name('contact');