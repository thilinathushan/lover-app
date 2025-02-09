<?php

namespace App\Http\Controllers;

class ValentineController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function privacyPolicy()
    {
        return view('policies.privacy-policy');
    }

    public function termsOfService()
    {
        return view('policies.terms-service');
    }

    public function adminDashboard()
    {
        return view('admin-dashboard');
    }

    public function commingSoon()
    {
        return view('comming-soon');
    }

    public function landingPage()
    {
        return view('landing');
    }
}
