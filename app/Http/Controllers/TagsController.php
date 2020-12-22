<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    function tags(){
        $tags=Tags::get() ; 
      return view('/tags/tags',["tags"=>$tags ]);
    }
}
//////////////////////////////////////////////////