<?php

use App\Livewire\Counter;
use App\Livewire\ShowPosts;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', Todos::class);
Route::get('counter', Counter::class);
Route::get('posts', ShowPosts::class);
