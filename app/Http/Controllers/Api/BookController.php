<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return [
            [
                'id' => 1,
                'title' => 'Title 1',
            ],
            [
                'id' => 2,
                'title' => 'Title 2',
            ],
            [
                'id' => 3,
                'title' => 'Title 3',
            ],
        ];
    }
    public function show($id)
    {
        return $id;
    }
}
