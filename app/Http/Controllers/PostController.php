<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function home()
    {
        return view('homepage');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new-article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'post_featured_img' => 'required',
            'post_body' => 'required',
            'post_description' => 'required',
        ]);
        $postData = new Post();
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $request->title);
        $postData->slug = $slug;
        $postData->title = $request->title;
        $postData->post_description = $request->post_description;
        $postData->post_body = $request->post_body;
        $postData->post_featured_img = $request->post_featured_img;
        $postData->post_author_id = Auth::user()->id;
        $postData->post_status = 1;
        $postData->save();

        return back()->with('message', 'Post saved');
        //return $request;
    }

    

    
    public function listArticles()
    {
        $articles = Post::paginate(10);
        return view('list-articles')->with('articles', $articles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $getArticle = Post::find($id);
        //return $getArticle->title;
        return view('article', $id)->with('getArticle', $getArticle);
    }


    public function readArticle($slug)
    {
        //return $slug;
        
        $displayArticle = Post::where('slug', $slug)->first();
        //return $id;
       //dd($id);
        return view('blog')->with('displayArticle', $displayArticle);
    }

    public function showHome(){
        $articles = DB::table('posts')
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();
        return view('homepage')->with('articles', $articles);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getArticle = Post::find($id);
        //return $getArticle->title;
        return view('edit')->with('getArticle', $getArticle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'post_featured_img' => 'required',
            'post_body' => 'required',
            'post_description' => 'required',
            'date' => 'required'
        ]);

        Post::where('id', $request->id)
            ->update([
                'title' => $request->title,
                'post_description' => $request->post_description,
                'post_body' => $request->post_body,
                'post_featured_img' => $request->post_featured_img,
                'created_at' => $request->date
            ]);
        return back()->with('message', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
