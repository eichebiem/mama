<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stat;

class StatsController extends Controller
{
    
    public function create()
    {
        return view('stats');
    }

    public function store()
    {
        Stat::create(request([
            'client_name',
            'client_address',
            'client_email',
            'contact_number',
            'client_tel',
            'research_title',
            'stats_procedure',
            'company_name',
            'company_address',
            'research_class'
        ]));

        return back()->with('message', 'Request has been sent! Thank you.');
    }



}
