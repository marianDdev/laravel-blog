<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class RobotsController extends Controller
{
    public function index(): Response
    {
        $content = 'User-agent: *' . PHP_EOL;
        $content .= 'Disallow:' . PHP_EOL;
        $content .= 'Sitemap: ' . url('/trs-sitemap-v2.xml') . PHP_EOL;

        return response($content)->header('Content-Type', 'text/plain');
    }
}
