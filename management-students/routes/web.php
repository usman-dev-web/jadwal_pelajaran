<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScheduleCourseController;
use App\Models\Room;
use App\Models\Schedule;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route login
Route::get("/", [LoginController::class, "index"])->middleware("guest")->name("login");
Route::post("/", [LoginController::class, "authenticate"])->middleware("guest");
Route::post("/logout", [LoginController::class, "logout"])->middleware("auth");

// route dashboard
Route::resource("/dashboard", ScheduleCourseController::class)->middleware("auth");


// route test
// Route::get("/test", function(){
//     return view("test", [
//         "jadwal" => Schedule::where("room_id", "1")->get()
//     ]);
// });