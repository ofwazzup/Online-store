<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\feedbackrequest;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class feedbackController extends Controller
{
    public function index() {
        $data = feedback::all();
        return view('feedback.feedback', ['data' => $data]);
    }

    public function feedbackCreate() {
        return view('feedback.feedbackCreate');
    }

    public function feedbackCreateSubmit(feedbackrequest $req) { 
        $feedback = new feedback();
        $feedback->name = $req->input('textname');
        $feedback->feedback = $req->input('feedbackText');
        $feedback->id_user = Auth::id();

        $feedback->save();

        return redirect()->route('feedback');
    }
}
