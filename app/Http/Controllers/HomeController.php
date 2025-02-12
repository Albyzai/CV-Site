<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use App\Experience;
use App\Inspiration;
use App\Interest;
use App\Project;
use App\Http\Requests\ContactRequest;

use Mail;
use App\Mail\Contact;

class HomeController extends Controller
{
    //

    public function index(){

        $inspirations = Inspiration::all();
        $experiences = Experience::orderBy('to', 'desc')->get();
        $educations = Education::orderBy('to', 'desc')->get();;
        $interests = Interest::all();
        $projects = Project::all();

   
        
        return view('welcome', compact('inspirations', 'experiences', 'interests', 'projects', 'educations'));

    }

    public function mail(ContactRequest $request){

        Mail::to('mohrdevelopment@gmail.com')->send(new Contact($request));

        return back()->with('status', 'Your message has been received');
    }

    public function filter($category){

        if($category != 'all'){
            $projects = Project::where('category', $category)->get();
        } else {
            $projects = Project::all();
        }

        response()->json($projects);

        return view('partials.test', compact('projects'));
    }

}
