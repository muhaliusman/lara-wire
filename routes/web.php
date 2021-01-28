<?php

use App\Http\Livewire\Base\AppComponent;
use App\Http\Livewire\User\Index as UserIndex;
use App\Http\Livewire\User\CreateUpdate as UserUpdate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{folder?}/{component?}', AppComponent::class);
