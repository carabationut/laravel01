<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function index()
    {
        
    	return 'Index of Pages';

    }

    public function about()
    {
        $people = [];
        // $people = [
        //     'Joey', 'Monica', 'Rachel'
        // ];

    	return view('pages.about', compact('people'));
    }

    public function contact()
    {

        return view('pages.contact');
    }
}