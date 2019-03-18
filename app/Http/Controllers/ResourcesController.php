<?php

namespace STEMLoyolaChallenges\Http\Controllers;

use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    /**
    * Render the website public landing page
    *
    *  @param Request $request
    *  @return Response
    */
   public function getArticle (Request $request, $id)
   {
       return view('pages.resources.article')->with('articleId', $id);
   }
}
