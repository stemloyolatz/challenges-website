<?php

namespace STEMLoyolaChallenges\Http\Controllers;

use Illuminate\Http\Request;

class ArchivesController extends Controller
{
     /**
      *  Render the archives landing page
      *
      *  @param Request $request
      *  @return Response
     */
     public function getHome (Request $request)
     {
          return view('pages.archives.home');
     }

     /**
      *  Fetch a past challenge
      *
      *  @param Request $request
      *  @return Response
     */
     public function getChallenge (Request $request, $id)
     {
          return view('pages.archives.challenge')->with('id', $id);
     }
}
