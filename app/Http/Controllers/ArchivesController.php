<?php

namespace STEMLoyolaChallenges\Http\Controllers;

use Illuminate\Http\Request;

class ArchivesController extends Controller
{
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
