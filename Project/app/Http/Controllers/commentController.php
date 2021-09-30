<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\comment;

class commentController extends Controller
{
    public function comment(Request $request)
    {
        $validated = $request->validate([
            'user_id'  => 'required',
            'comment'   => 'required'
        ]);
        // dd($validated);

        comment::create($validated);

        return redirect('home');
    }
}
