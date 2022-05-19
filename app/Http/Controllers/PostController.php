<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $data['post'] = Post::with('user')->get();
        
        return view('post',$data);
    }

    public function show($slug){
        $data['post'] = Post::with('user')->where('slug',$slug)->first();
        $data['comment'] = Comment::where('post_id',$data['post']->id ?? '1')->get();

        return view('showpost',$data);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with(['error' => 'Error post comment']);
        } else {
            Comment::create($request->all());
            return back()->with(['success' => 'Success post comment']);
        }
    }

    public function list(){
        $data['user'] = User::get();
        
        return view('listuser',$data);
    }
    
    public function listComment($user){
        $data['comment'] = Comment::where('email',$user)->get();
        
        return view('listcomment',$data);
    }
}
