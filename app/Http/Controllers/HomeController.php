<?php

namespace STEMLoyolaChallenges\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Render the website public landing page
     *
     *  @param Request $request
     *  @return Response
     */
    public function getPublicHome (Request $request)
    {
        return view('pages.home.public');
    }


    /**
     * Render the website home page for logged in user
     *
     *  @param Request $request
     *  @return Response
     */
    public function getPrivateHome (Request $request)
    {
        return view('pages.home.private');
    }
}
