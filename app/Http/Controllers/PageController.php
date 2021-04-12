<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // Cara 1
    // public function __invoke()
    // {
    //     return view(request()->segment(1));
    // }

    // Cara 2
    public function __invoke($page){
        $metaTitle = __('Meta Title: '.$page);
        if($metaTitle != 'Meta Title: '.$page){
            $metaTitle = NULL;
        }
        return view($page, ['metaTitle' => $metaTitle]);
    }

    // Cara 3
    // public function __invoke($page){
    //     $metaTitle = __($page);
    //     if($metaTitle != $page){
    //         $metaTitle = NULL;
    //     }
    //     return view($page, ['metaTitle' => $metaTitle]);
    // }
}
