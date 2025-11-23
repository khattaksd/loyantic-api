<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Stringable;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/quote', function (Request $request) {
        [$text, $author] = (new Stringable(Inspiring::quotes()->random())->explode('-'));
        return [
            'text' => trim($text),
            'author' => trim($author),
        ];
    });
});
