<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Workshop;
use App\Stat;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show_home()
    {
        $workshops = Workshop::where('unread', 1)->count();

        $stats = Stat::where('unread', 1)->count();

        return view('admin.home', compact('workshops', 'stats'));
    }


    // <==========  TRAINING WORKSHOP  ======================>

    public function show_training_workshop()
    {
        $workshops = Workshop::latest()->get();

        return view('admin.training_workshop', compact('workshops'));
    }

    public function delete_training_workshop($workshop)
    {
        Workshop::destroy($workshop);

        return back()->with('message', 'Workshop Request has successfully deleted!');
    }

    public function view_training_workshop($workshop)
    {
        Workshop::find($workshop)->update([
            'unread' => '0'
        ]);

        $workshop = Workshop::find($workshop);

        return view('admin.view_training_workshop', compact('workshop'));
    }

    public function print_training_workshop(Workshop $workshop)
    {
        return view('admin.print_training_workshop', compact('workshop'));
    }


    // <==========  STATISTICAL ANALYSIS  ======================>

    public function show_statistical_analysis()
    {
        $stats = Stat::latest()->get();

        return view('admin.statistical_analysis', compact('stats'));
    }

    public function delete_statistical_analysis($stat)
    {
        Stat::destroy($stat);

        return back()->with('message', 'Statistical Analysis Request has successfully deleted!');
    }

    public function view_statistical_analysis($stat)
    {
        Stat::find($stat)->update([
            'unread' => '0'
        ]);

        $stat = Stat::find($stat);

        return view('admin.view_statistical_analysis', compact('stat'));
    }

    public function print_statistical_analysis(Stat $stat)
    {
        return view('admin.print_statistical_analysis', compact('stat'));
    }


    // <==========  STATISTICAL ANALYSIS  ======================>

    

}
