<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        return response()->json([
            "status" => "success",
            "order" => [
                "id" => rand(1000, 5000),
                "product" => $request->product,
                "quantity" => $request->quantity
            ]
        ]);
    }
}
