<?php

namespace STEMLoyolaChallenges\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
    *  Fetch an article
    *
    *  @param Request $request
    *  @return Response
    */
   public function getArticle (Request $request, $id)
   {
        return view('pages.resources.article')->with('articleId', $id);
   }
}
