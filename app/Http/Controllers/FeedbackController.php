<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Redirect;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    //
    function feedbackData(Request $request)
    {
        $feedback=new Feedback;
        $feedback->name=$request->fullname;
        $feedback->rollnumber=$request->rollno;
        $feedback->branch=$request->branch;
        $feedback->mobilenumber=$request->mobileno;
        $feedback->email=$request->email;
        $feedback->description=$request->describeissue;
        if($feedback->save())
        {
            return Redirect::to('/')->with('message', 'Complaint/Feedback Submitted');
        }
        else{
            return Redirect::to('/')->with('message', 'Complaint/Feedback Not Submitted! Please Try Again.');
        }

    }
    function getData()
    {
        $data=Feedback::all();
        return view('feedback',['feedbacks'=>$data]);
    }
}
