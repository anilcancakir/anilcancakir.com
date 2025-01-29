<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use SEOMeta;

class HomeController extends Controller
{
    /**
     * @return View|Factory|Application
     */
    public function index(): View|Factory|Application
    {
        SEOMeta::setTitle('🚀 Anılcan Çakır – Software Developer | Open-Source & AI Enthusiast');
        SEOMeta::setDescription('Experienced software developer with 10+ years in building scalable web and mobile solutions. Passionate about open-source, AI, and innovative software development. Explore my projects and contributions.');

        return view('home');
    }
}
