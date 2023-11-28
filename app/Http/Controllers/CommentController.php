<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect('login');
        }

        $routeSlug = $request->slug;
        $rules = [
            'content' => 'required',
            'post_id' => 'required'
        ];
        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        Comment::create($validatedData);

        return redirect("/post/$routeSlug");
    }

    public function contact_mail_send(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email:dns',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('ediefnto778@gmail.com')->send(new MailSend($validatedData));
        return redirect('/contact')->with('success', 'Success Terkirim');
    }
}
