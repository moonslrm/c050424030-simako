<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advisor;

class AdvisorController extends Controller
{
    public function index(Request $request)
    {
        $advisors = Advisor::orderBy('id', 'desc')->paginate(15);
        return view('advisors.index', compact('advisors'));
    }
}
