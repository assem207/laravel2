<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage ;

class PostsController extends Controller
{
    public function index(){
       $posts=Posts::orderby('id','DESC')->paginate(3) ; 
      return view('posts/index',["posts"=>$posts ]);
    }
    public function show($id)
    {
        $post =Posts::findOrFail($id);
        return  view('/posts/show',["post"=>$post]) ; 
    }
    public function latset($num){
        $posts=Posts::SELECT('id','title','body','created_at')->ORDERBY('id','DESC')->take($num)->get() ; 
        return view('posts/latset',["posts"=>$posts]);

    }
    public function search($keyword)
{
  $posts =  Posts::where('title','like',"%$keyword%")->orwhere('body','like',"%$keyword%")->get();
  return view('posts/search',[
      'posts'=>$posts,
       'keyword'=>$keyword
      ]);
}
public function create(){
    return  view('posts/create');
}
public function store(Request $request){

    $request->validate([
        'title'=> 'required |string | max:100|min:3',
        'body'=> 'required |string |min:3',
         'img'=>'required |file|image|max:1024|mimes:jpg,png'
    ]) ;
     $path=  storage::putFile("posts",$request->file('img'));
     
    $posts= new Posts();
    $posts->title = $request->title ;
    $posts->body = $request->body ;
    $posts->img = $path ;
    $posts->save() ;
    return redirect('posts') ;
}
public function edit($id){
    $post =Posts::findOrFail($id);
        return  view('posts/edit',["post"=>$post ]) ; 
}
function ubdate(Request $request ,$id ) 
{
    $request->validate([
        'title'=> 'required |string | max:100|min:3',
        'body'=> 'required |string |min:3',
        'img'=>'nullable|file|image|max:1024|mimes:jpg,png',

    ]) ;
    
    $post =Posts::find($id); 
    $path= $post->img ;
    if($request->hasFile('img'))
    {
        storage::delete($path);
        $path=  storage::putfile('posts',$request->file('img'));
    }

    $post->title = $request->title ;
    $post->body = $request->body ;
    $post->img= $path  ;
    $post->save() ;

    return redirect(url('posts/show/'.$post->id));
}
function delete($id ) 
{
    $post =Posts::findOrFail($id); 
    storage::delete($post->img) ;
        $post->delete() ;
        return redirect('posts');
}
}
//////////////////////////////
/////////////////////////
///////////////////////////////////////////
