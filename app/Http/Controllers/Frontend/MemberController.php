<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $members = Member::orderBy('id', 'desc')->paginate(15);
        return view('members.index', compact('members'));
    }
}
