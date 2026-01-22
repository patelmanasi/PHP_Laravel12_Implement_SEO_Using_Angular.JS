<?php

namespace App\Http\Controllers;

use App\Models\SeoPage;

class SeoController extends Controller
{
    public function show($slug = 'home')
    {
        $seo = SeoPage::where('slug', $slug)->first();

        //  Invalid slug → 404
        if (!$seo) {
            abort(404);
        }

        //  SEO rendered by Laravel (inspect-visible)
        return view('layouts.app', compact('seo'));
    }
}
