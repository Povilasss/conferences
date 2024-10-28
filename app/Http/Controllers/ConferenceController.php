<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ConferenceController extends Controller
{
public function index()
{
return view('admin.conferences.index');
}
}
