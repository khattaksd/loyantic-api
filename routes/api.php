<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/quote', function (Request $request) {
        $quote = Inspiring::quotes()->random();
        [$text, $author] = str($quote)->explode('-');
        return [
            'text' => trim($text),
            'author' => trim($author),
        ];
    });
});
