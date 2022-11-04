<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::resource('persona', PersonaController::class);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//   GET|HEAD        / ................................. home › HomeController@index
//   POST            _ignition/execute-solution ........ ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController
//   GET|HEAD        _ignition/health-check ............ ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
//   POST            _ignition/update-config ........... ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController
//   GET|HEAD        api/user .......................... 
//   GET|HEAD        login ............................. login › Auth\LoginController@showLoginForm
//   POST            login ............................. Auth\LoginController@login
//   POST            logout ............................ logout › Auth\LoginController@logout
//   GET|HEAD        password/confirm .................. password.confirm › Auth\ConfirmPasswordController@showConfirmForm
//   POST            password/confirm .................. Auth\ConfirmPasswordController@confirm
//   POST            password/email .................... password.email › Auth\ForgotPasswordController@sendResetLinkEmail
//   GET|HEAD        password/reset .................... password.request › Auth\ForgotPasswordController@showLinkRequestForm
//   POST            password/reset .................... password.update › Auth\ResetPasswordController@reset
//   GET|HEAD        password/reset/{token} ............ password.reset › Auth\ResetPasswordController@showResetForm
//   GET|HEAD        personal .......................... personal.index › PersonaController@index
//   POST            personal .......................... personal.store › PersonaController@store
//   GET|HEAD        personal/create ................... personal.create › PersonaController@create
//   GET|HEAD        personal/{personal} ............... personal.show › PersonaController@show
//   PUT|PATCH       personal/{personal} ............... personal.update › PersonaController@update
//   DELETE          personal/{personal} ............... personal.destroy › PersonaController@destroy
//   GET|HEAD        personal/{personal}/edit .......... personal.edit › PersonaController@edit
//   GET|HEAD        register .......................... register › Auth\RegisterController@showRegistrationForm
//   POST            register .......................... Auth\RegisterController@register
//   GET|HEAD        sanctum/csrf-cookie ............... sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show