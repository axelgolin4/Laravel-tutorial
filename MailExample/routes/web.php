<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

use App\Jobs\Logger;
use App\Jobs\Logger2;

Route::get('/', [MailController::class, 'index'])->name('index');



Route::get('/Job', function () {

    Logger::dispatchAfterResponse();

    Logger::dispatch()->onQueue('dos');
    Logger2::dispatch()->onQueue('tres');



    return response("Fin");
});




Route::get('/mailme', [MailController::class, 'mailMe'])->name('mailMe');
