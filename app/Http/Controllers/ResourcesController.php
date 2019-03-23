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
   public function getArticle (Request $request)
   {
        //return view('pages.resources.article')->with('articleId', $id);
        return view('pages.resources.article');
   }

   public function getReferences (Request $request)
   {
        //return view('pages.resources.article')->with('articleId', $id);
        return view('pages.resources.references');
   }
}
