<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ResponseController extends Controller
{
    public function store(Request $request) {
        try {
            //  @TODO change the role of the user
            if (Auth::user()) {
                $data = $request->only((new Subject())->getFillable());

                $validator = $this->validator($data);

                if ($validator->fails()) {
                    // Session::flash('message', $validator->fails());
                    // Session::flash('alert-type', 'alert-error');
                    return redirect('subject');
            } else {
                    Subject::save($data);
                    // Session::flash('message', "Sujet cree avec success");
                    // Session::flash('alert-type', 'alert-success');
                    return redirect('subject');
                }
            }
        } catch (\Exception $exception) {
                // redirect to login

                //return view('404');

            return 3;
        }
    }


    protected function validator(&$data)
    {
        return Validator::make($data, [
            'title' => 'required|max:250|min:3',
            'content' => 'required|min:5',
        ]);
    }
}
