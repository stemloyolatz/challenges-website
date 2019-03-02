<?php

namespace STEMLoyolaChallenges\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Render the website About BongoHacks page
     *
     *  @param Request $request
     *  @return Response
     */
    public function getAbout (Request $request)
    {
        return view('pages.about.about');
    }


    /**
     * Render the website Contacts page
     *
     *  @param Request $request
     *  @return Response
     */
    public function getContacts (Request $request)
    {
        return view('pages.about.contacts');
    }


    /**
     * Render the website Privacy Policy page
     *
     *  @param Request $request
     *  @return Response
     */
    public function getPrivacy (Request $request)
    {
        return view('pages.about.privacy');
    }

    /**
     * Render the website Terms and Conditions of Use page
     *
     *  @param Request $request
     *  @return Response
     */
    public function getTerms (Request $request)
    {
        return view('pages.about.terms');
    }
}
