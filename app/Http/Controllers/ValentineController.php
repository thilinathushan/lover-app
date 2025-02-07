<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
