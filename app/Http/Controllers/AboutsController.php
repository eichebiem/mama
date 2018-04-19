<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About1;
use App\About2;

class AboutsController extends Controller
{
    public function show_about_us()
    {
        $about_us = About1::find(1);

        return view('about_us', compact('about_us'));
    }


    public function edit_about_us()
    {
        $about_us = About1::find(1);
        
        return view ('admin.about.about_us', compact('about_us'));
    }

    public function update_about_us($about_us)
    {

        // dd(array_merge(
        //     request(['title', 'body']),
        //     ['edited_by' => auth()->user()->name]
        // ));

        About1::find($about_us)->update(
            array_merge(
                request(['title', 'body']),
                ['edited_by' => auth()->user()->name]
            )
        );

        return back()->with('message', 'About Us seccessfully updated!');
    }



    // <=============================================================>

    public function show_about_me()
    {
        $about_me = About2::find(1);

        return view('about_me', compact('about_me'));
    }

    public function edit_about_me()
    {
        $about_me = About2::find(1);

        return view('admin.about.about_me', compact('about_me'));
    }

    public function update_about_me($about_me)
    {

        About2::find($about_me)->update(
            array_merge(
                request(['body']),
                ['edited_by' => auth()->user()->name]
            )
        );

        return back()->with('message', 'About Us seccessfully updated!');
    }

}
