<?php

use Illuminate\Support\Facades\Route;
use App\Models\About;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\Project;
use App\Models\Skill;

Route::get('/', function () {
    $hero = Hero::first();
    $about = About::first();
    $skills = Skill::all();
    $projects = Project::all();
    $contacts = Contact::all();

    return view('home', compact('hero', 'about', 'skills', 'projects', 'contacts'));
});
