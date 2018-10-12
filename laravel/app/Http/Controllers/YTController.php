<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class YTController extends Controller
{
  public function ShowAll(Request $request){
    if ($request->input('search')) {
      $query = "
      SELECT *
      FROM `yt`
      WHERE `genre` = '".$request->input('search')."'
    ";
    
    } else {
      $query = "
      SELECT * 
      FROM `yt` 
      ";
    }

    $all = DB::select($query);
 
    // display the form
    $form = view('YT/list', [
        'all' => $all
    ]);
    $wrapper = view('YT/wrapper', [
        'content' => $form
    ]);

    return $wrapper;
  }

  public function insert(Request $request){
    $query = "
      INSERT INTO YT (name, url, description, genre, date)
      VALUES ('" . $request->input('name'). "','" .$request->input('url')."','" .$request->input('description')."','" .$request->input('genre')."','" .date('Y-m-d H:i:s')."')
    ";
    DB::insert($query);
  }
}