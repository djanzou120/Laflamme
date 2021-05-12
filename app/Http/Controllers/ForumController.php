<?php

namespace App\Http\Controllers;

use App\Models\Response;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ForumController extends Controller
{

    public function listSubject(){

        $data = Subject::all();
        return view('pages.forum.list',['subjects'=>$data]);
    }

    public function subjectDetail(Request $request){
        $subject = Subject::with('user')->where('id', $request->id)->get()->first();
        if (empty($subject)){
            return redirect("404");
        }
        $responses = Response::where('subject_id', $request->id)->with('user')->get()->reverse();
        return view('pages.forum.detail',['subject'=>$subject, 'responses'=>$responses]);
    }

    public function addSubject(Request $request) {
        try {

            //  @TODO change the role of the user
            if (Auth::user()) {
                $data = $request->only((new Subject())->getFillable());
                $validator = $this->validator($data);
                if ($validator->fails()) {
                    Session::flash('message', "Veuillez renseigner le titre ou le contenu du post");
                    //Session::flash('alert-type', 'alert-success');
                    return ['message'=>$validator->errors()];
                } else {
                    $data['user_id'] = Auth::id();
                    Subject::create($data);

                    return ['message'=> 'success'];
                }
            } else{
                return ['message'=> 'Vous devez etre connecte pour creer un sujet'];
            }
        } catch (\Exception $exception) {
            return ['message'=> "Une erreur s'est produite! Veuillez reessayer plus tard !"];
        }
    }

    public function addComment(Request $request) {
        try {
                $data = $request->only((new Response())->getFillable());
                $validator =Validator::make($data, [
                    'name' => 'required|max:250|min:3',
                    'email' => 'required|max:250|min:3',
                    'subject_id' => 'required',
                    'response' => 'required',
                ]);
                if ($validator->fails()) {
                    dd($validator->errors());

                    Session::flash('message', "Veuillez renseigner les informations du commentaire svp");
                    return redirect('forum/detail/'.$request->subject_id);
                } else {
                    Response::create($data);
                    return redirect('forum/detail/'.$request->subject_id);
                }

        } catch (\Exception $exception) {
            // redirect to login
            dd($exception);
            return redirect('404');
        }
    }

    protected function validator(&$data)
    {
        return Validator::make($data, [
            'title' => 'required|max:250|min:3|string',
            'content' => 'required|min:5|string',
        ]);
    }
}
