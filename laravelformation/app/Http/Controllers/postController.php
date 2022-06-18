<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Video;

class postController extends Controller
{
    public function index()
    {
        /*$post = Post::find(16);
        $post->update([
            'title' => 'titre edite 16'
        ]);
        dd('edite');*/

        /*$post = Post::find(11);
        $post->delete();*/
        //Post::destroy(18);
        /*Post::where('title','mon titre 1')->delete();
        dd('poste supprimer');*/

        $posts = Post::all();
        $video = Video::findOrfail(1);
        //$posts = Post::orderBy('title')->take(3)->get();

        //return view('articles',compact('title1','title2'));
        return view('articles',compact('posts','video'));
    }

    public function show($id)
    {
        /*$posts = [
            1 => 'Mon Titre N1',
            2 => 'Mon titre N2'
        ];

        $post = $posts[$id] ?? 'pas de titre';*/

        //$post = Post::find($id);
        $post = Post::findOrFail($id);
        //$post->tags()->detach([1,4]);
        //$post = Post::where('title','Consequuntur a atque et iste.')->firstOrFail();
        //dd($post);

        return view('article',compact('post'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        //dd($request->avatar->store('avatars'));
        /*$post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();*/

        $request->validate([
            'title' => 'required|min:5|max:255|unique:posts',
            'content' => 'required'
        ]);

        //une autre facon de faire(plus pro)
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        dd('post cree');
    }

    public function contact()
    {
        return view('contact');
    }

    public function register()
    {
        $post = Post::findOrFail(21);
        $video = Video::findOrFail(1);

        $comment1 = new Comment(['content'=>'mon premier commentaire']);
        $comment2 = new Comment(['content'=>'mon deuxieme commentaire']);
        $post->comments()->saveMany([
            $comment1,
            $comment2
        ]);

        $comment3 = new Comment(['content'=>'mon troisieme commentaire']);
        $video->comments()->save($comment3);
        dd($post);
    }
}
