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
$routeTree = '/';
for ($i = 1; $i <= config('larawire.component_tree'); $i++) {
    $routeTree .= "{component_{$i}?}/";
}

/**
 * Route format
 *
 * base_url/{folder}/{folder}/../{component}
 * menggunankan dash format.
 * misal component livewire bernama User\ComponenSatu
 * maka route yang dibolehkan adalah base_url/user/component-satu
 */
Route::get($routeTree, AppComponent::class);
