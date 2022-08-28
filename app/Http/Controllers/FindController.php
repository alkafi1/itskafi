<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindController extends Controller
{
    //

    function index()
    {
        $icons = array (
        'facebook',
        'github',
        'gitlab',
         'heart',
         'instagram',
         'link',
         'linkedin',
         'mail',
         'message-circle',
         'phone-call',
         'twitter',
         'user',
         'youtube',
        );
        return view('admin.findme.index',[
            'icons' => $icons,
        ]);
    }
}
