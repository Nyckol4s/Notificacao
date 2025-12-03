<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Services\NotificationService;

Route::get('/notificar', function () {
    $service = new NotificationService();
    return $service->send("Juliana", "Sua compra foi confirmada!");
});

Route::get('/consumir-order', function () {
    $response = Http::post('http://127.0.0.1:8000/api/order', [
        "product" => "Smartphone",
        "quantity" => 1
    ]);

    return $response->json();
});
