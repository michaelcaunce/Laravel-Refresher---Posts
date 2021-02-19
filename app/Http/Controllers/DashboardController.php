<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware(['auth']);
    }

     public function index(User $user) {
        $posts = $user->posts()->with(['user', 'likes'])->paginate(20);
        
        return view('dashboard', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
