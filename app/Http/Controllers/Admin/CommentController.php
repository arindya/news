<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Language;
use App\Models\News;
use App\Models\Tag;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $languages = Language::all();
        $news = News::all();
        return view ('admin.comment.index',compact('languages','news'));
    }

    // public function details(string $id)
    // {
    //     $languages = Language::all();
    //     $comments = Comment::all();
    //     $news = News::findOrFail($id);

    //     if(!canAccess(['news all-access'])){
    //         if($news->author_id != auth()->guard('admin')->user()->id){
    //             return abort(404);
    //         }
    //     }

    //     $categories = Category::where('language',$news->language)->get();
    //     return view ('admin.comment.details',compact('languages','comment'));

    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $languages = Language::all();
        $comments = Comment::where('news_id',$id)->get();
        // $users = users::all();where('user_id',$comments)->get();
        $news = News::findOrFail($id);

        if(!canAccess(['news all-access'])){
            if($news->author_id != auth()->guard('admin')->user()->id){
                return abort(404);
            }
        }

        // $categories = Category::where('language',$news->language)->get();
        return view ('admin.comment.details',compact('languages','comments'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
