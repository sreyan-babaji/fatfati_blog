<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
     public function comment(){
        
        return view('admin.comments',['title' => 'comments']);
    }
    



    public function comment_store(Request $request, $post_id)
    {
        
        if (session()->has('pending_comment')) {
            $comment = new Comment();
            $comment->post_id = session()->pull('comment_post_id');
            $comment->user_id = auth()->id(); 
            $comment->content = session()->pull('pending_comment');
            $comment->status = 'pending';
            $comment->save(); 

            return redirect()->back()->with('success', 'Comment posted after login!');
        }

        
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = new Comment();
        $comment->post_id = $post_id;
        $comment->user_id = auth()->id(); 
        $comment->content = $request->input('content');
        $comment->status = 'pending';
        $comment->save();

        return redirect()->back()->with('success', 'Comment posted!');
    }

}