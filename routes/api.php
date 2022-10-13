<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Авторизация / Регистрация
Route::post('/user/login', [AuthController::class, 'login']);
Route::post('/user/register', [AuthController::class, 'register']);

//Защищённые по токену пути 
Route::group([
    'middleware' => 'auth.sanctum'
], function () {

    //Получить уровень
    Route::get('/level/{levelId}', [LevelController::class, 'get']);

    Route::group([
        'prefix' => '/user'
    ], function () {
        //Изменить получить профиль пользователя
        Route::get('/profile', [UserController::class, 'getProfile']);
        Route::post('/profile', [UserController::class, 'updateProfile']);
        //Добавление удаление друга
        Route::post('/{userId}/add', [UserController::class, 'addFriend']);
        Route::delete('/{userId}/delete', [UserController::class, 'deleteFriend']);
        //Рейтинг
        Route::delete('/score', [UserController::class, 'getScore']);
    });

    Route::group([
        'prefix' => '/chats'
    ], function () {
        //Получить чаты пользователя
        Route::put('/', [ChatController::class, 'getChats']);
        //Получить сообщения чата
        Route::get('/{chatId}', [ChatController::class, 'getChat']);
        Route::post('/{chatId}/message', [ChatController::class, 'createMessage']);
        Route::delete('/{chatId}/message/{messageId}', [ChatController::class, 'deleteMessage']);
        Route::put('/{chatId}/message/{messageId}', [ChatController::class, 'updateMessage']);
    });

});
