<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //
    public function master()
    {
        return view('template.masterlimbad');
    }
}
