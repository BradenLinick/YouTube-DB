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

    return redirect('YT/wrapper');
  }

  public function delete(Request $request){
    if ($request->input('delete')) {
      $query = "
      DELETE FROM YT
      WHERE `id` = " . $request->input('id');

      DB::delete($query);
    }

    return redirect('YT/wrapper');
  
  }

  public function update(Request $request){

      $query = "
      SELECT *
      FROM `yt`
      WHERE `id` = '".$request->input('id')."'
      ";

      //$query = "
      //UPDATE `yt`
      //SET `name` = $request->name
      //WHERE `id` = $request->id
      //";

  
    $id = $request->input('id');
    $song = DB::selectOne($query);
    //$song = DB::selectOne($query);

    $update = view("YT/update", [
      "song" => $song
    ]);

    return $update;
    
    $query = "
      INSERT INTO YT (name, url, description, genre, date)
      VALUES ('" . $request->input('name'). "','" .$request->input('url')."','" .$request->input('description')."','" .$request->input('genre')."','" .date('Y-m-d H:i:s')."')
    ";
    DB::insert($query);
  }
}