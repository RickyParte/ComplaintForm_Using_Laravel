<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            return redirect('success');
        }
        else{
            return redirect('fail');
        }
        
    }
    function getData()
    {
        $data=Feedback::all();
        return view('feedback',['feedbacks'=>$data]);
    }
}
