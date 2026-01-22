<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
return view('home');
})->name('home');

Route::get('/about', function () {
$name = 'Victory Kyle N. Villarno'; // Replace with YOUR name
$course = 'Bachelor of Science in Information Technology';
$university = 'Central Mindanao University'; // Replace with YOUR university
return view('about', [
'name' => $name,
'course' => $course,
'university' => $university
]);
})->name('about');

// Route::get('/projects', function () {
// $projects = [
// ['Platformer' => 'Project 1', '2d platformer game made in godot game engine' => 'My first ever game project'],
// ['Rock Paper Warrior' => 'Project 2', 'a 2d hack & slash game with the mechanics of rock paper scissors' => '2nd game i developed and presented in an event'],
// ['One Path One Fate' => 'Project 3', '3d top-down turn based game' => '3rd game developed and submitted as a final project in 2nd year'],
// ];
// return view('projects', ['projects' => $projects]);
// })->name('projects');

Route::get('/projects', function () {
$projects = [
['title' => 'Platformer', 'description' => '2d platformer game made in godot game engine'],
['title' => 'Rock Paper Warrior', 'description' => 'a 2d hack & slash game with the mechanics of rock paper scissors'],
['title' => 'One Path One Fate', 'description' => '3d top-down turn based game'],
];
return view('projects', ['projects' => $projects]);
})->name('projects');

Route::get('/contact', function () {
$email = 'pewdiepew87@gmail.com'; // Replace with YOUR email
$phone = '+63 123 456 7890'; // Replace with YOUR phone

return view('contact', [
'email' => $email,
'phone' => $phone
]);
})->name('contact');