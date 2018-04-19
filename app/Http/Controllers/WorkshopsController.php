<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workshop;

class WorkshopsController extends Controller
{
    public function create()
    {
        return view('workshop');
    }

    public function store()
    {
        Workshop::create(request([
            'company_name',
            'company_address',
            'company_email',
            'company_tel',
            'participants',
            'contact_person',
            'contact_number',
            'contact_designation',
            'contact_department',
            'special_instructions',
            'course',
            'ewan',
            'days'
        ]));

        return back()->with('message', 'Request has been sent! Thank you.');
    }


}
