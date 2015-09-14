<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\lists;

class listscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(Auth::check()){
            return redirect('home');
        }

        return view('pages.index');

    }

    public function profile(Request $request)
    {
        if($request->user()) {
            $user = Auth::user();
            $lists = Auth::user()->lists;
            return view('pages.profile')->with('lists',$lists)->with('user',$user);
        }
        return view('auth.login');
    }

    public function create(request $request)
    {

        if($request->ajax()) {

        }



   }

    public function delete($id)
    {

        if(Auth::check()){
                lists::destroy($id);
                return redirect('home');
        }

        return redirect('auth/login');
    }
}
