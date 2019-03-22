<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 * Home pages
 */
// Public home page a.k.a the landing page
Route::get('/', [
    'as' => 'home.public',
    'uses' => 'HomeController@getPublicHome'
]);


/*
 * About STEM Loyola Challenges
 */
Route::get('/about', [
    'as' => 'about.about',
    'uses' => 'AboutController@getAbout'
]);

Route::get('/about/contacts', [
    'as' => 'about.contacts',
    'uses' => 'AboutController@getContacts'
]);

Route::get('/about/privacy', [
    'as' => 'about.privacy',
    'uses' => 'AboutController@getPrivacy'
]);

Route::get('/about/terms', [
    'as' => 'about.terms',
    'uses' => 'AboutController@getTerms'
]);


/*
 * Resources pages
 */
Route::get('/article/recommended-ides', [
    'as' => 'resources.article',
    'uses' => 'ResourcesController@getArticle'
]);
