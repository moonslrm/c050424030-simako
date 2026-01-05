<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationController extends Controller
{
    public function index(Request $request)
    {
        $organizations = Organization::orderBy('id', 'desc')->paginate(15);
        return view('organizations.index', compact('organizations'));
    }
}
