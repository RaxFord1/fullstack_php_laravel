<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', function () {
    return Post::all();
});

Route::delete('/posts/{id}', function ($id) {
    Post::destroy($id);
    return $id;
});

Route::post('/posts', function () {
    $json = file_get_contents('php://input');

// Decode the JSON data into a PHP associative array
    $data = json_decode($json, true);

// Now, $data contains the form data as an associative array
    $name = $data['name'];
    $text = $data['text'];

    $data = [
        'title' => $name,
        'text' => $text,
    ];

    Post::create($data);


    echo $name . " " . $text;
    return $name . " " . $text;
});
