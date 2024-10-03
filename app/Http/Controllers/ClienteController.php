<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use SebastianBergmann\Type\VoidType;

class ClienteController extends Controller
{
    public function listar()
    {
        $array = [
            "nome" => "Nome teste"
        ];

        return response()->json(data: $array, status: 200);

    }
}
