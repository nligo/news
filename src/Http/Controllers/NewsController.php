<?php

namespace Coffey\News\Http\Controllers;

use Illuminate\Routing\Controller;


class NewsController extends Controller
{
    public function index()
    {
        return ['name' => 'coffey'];
    }
}
