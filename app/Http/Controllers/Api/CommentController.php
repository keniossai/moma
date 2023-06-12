<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return Response::api('Comment deleted.');
    }
}
