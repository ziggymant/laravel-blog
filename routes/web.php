<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     $categories1 = App\Category::take(4)->get();
//     $categories2 = App\Category::skip(4)->take(4)->get();
//     $posts = App\Post::orderBy('created_at','desc')->paginate(5);
//     return view('welcome', compact('posts', 'categories1', 'categories2'));
// });

Auth::routes();

Route::get('/', 'PublicBlogController@index');
Route::get('/home', 'PublicBlogController@home');
Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'PublicBlogController@post']);
Route::get('/category/{id}', 'PublicBlogController@category');



Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');


Route::get('/search/{q}', 'Controller@search');


Route::group(['middleware'=>'admin'], function(){


  Route::get('/admin/index', ['as'=>'admin.index','uses'=>'Dashboard@index']);
  Route::resource('/admin/users', 'AdminUsersController');
  Route::resource('/admin/posts', 'AdminPostsController');
  Route::resource('/admin/categories' ,'AdminCategoriesController');
  Route::resource('/admin/media', 'AdminMediaConrtoller');
  Route::resource('/admin/comments', 'PostCommentsController');
  Route::resource('/admin/comment/replies', 'CommentRepliesController');


});

Route::group(['middleware'=>'auth'], function(){

  Route::post('/comment/reply', 'CommentRepliesController@createReply');
  Route::get('/profile/{id}', 'PublicUserController@show');
  Route::patch('/profile/update/{user}', 'PublicUserController@update');

});
