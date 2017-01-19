<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Charts;
use App\User;
use App\Post;
use App\Category;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::all();

      $categorries_array = $categories->pluck('name')->all();
      $categories_values = [];

      foreach($categories as $category){
        $posts = Post::where('category_id', $category->id)->get();
        $categories_values[] = count($posts);
      }

      $chart =   Charts::create('pie', 'highcharts')
      ->title('Posts by categories')
      ->labels($categorries_array)
      ->values($categories_values)
      ->dimensions(1000,500)
      ->responsive(true);

      $chart2 = Charts::database(User::all(), 'bar', 'highcharts')
      ->title('New users')
      ->elementLabel("Users")
      ->dimensions(1000, 500)
      ->responsive(true)
      ->lastByMonth(6, true);


        return view('admin.index', compact('chart', 'chart2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

}
