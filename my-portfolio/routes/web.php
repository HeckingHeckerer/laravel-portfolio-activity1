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

return view('about', [
'name' => $name,
'course' => $course,
'university' => $university,

]);
})->name('about');

Route::get('/projects', function () {
$projects = [
['Platformer Game' => 'Project 1', '2d platformer game made in godot game engine' => 'My first ever game project'],
['Rock Paper Warrior' => 'Project 2', '2d Hack n Slash game' => '2nd game project, which i presented in an event'],
['One Path One Fate' => 'Project 3', '3d top-down turn based combat game' => '3rd game i made and submitted as a project in the second year'],
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