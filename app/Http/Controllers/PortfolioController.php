<?php

namespace App\Http\Controllers;

use App\Services\PortfolioData;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Tampilkan halaman utama portofolio
     */
    public function index()
    {
        $profile = PortfolioData::getProfile();
        $categories = PortfolioData::getCategories();
        $skills = PortfolioData::getSkills();
        $allProjects = PortfolioData::getProjects();

        // Pisahkan proyek featured (4 proyek baru) dan proyek pendukung (5 proyek lainnya)
        $featuredProjects = array_values(array_filter($allProjects, fn($p) => $p['featured'] === true));
        $otherProjects = array_values(array_filter($allProjects, fn($p) => $p['featured'] === false));

        return view('portfolio', compact(
            'profile',
            'categories',
            'skills',
            'allProjects',
            'featuredProjects',
            'otherProjects'
        ));
    }
}
