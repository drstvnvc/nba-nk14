<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Team $team, CreateCommentRequest $request)
    {
        $data = $request->validated();

        $comment = new Comment;
        $comment->content = $data['content'];
        $comment->user()->associate(auth()->user());
        $comment->team()->associate($team);
        $comment->save();

        return back();
    }
}
