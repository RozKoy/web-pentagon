<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ProfileLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.landing.profile');
    }
}
